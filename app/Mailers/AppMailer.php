<?php

namespace App\Mailers;

use App\Subscription;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer {

    protected $mailer;

    protected $from = 'oddomir.mandalovic@gmail.com';

    protected $to;

    protected $view;

    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmailConfirmationFor(Subscription $subscription)
    {
        $this->to = $subscription->email;
        $this->view = 'email/confirm';
        $this->data = compact('subscription');

        $this->deliver();
    }

    public function sendEmailRejectionFor(Subscription $subscription)
    {
        $this->to = $subscription->email;
        $this->view = 'email/reject';
        $this->data = compact('subscription');

        $this->deliver();
    }


    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {

            $message->from($this->from, 'Administrator')
                ->to($this->to);
        });
    }

}