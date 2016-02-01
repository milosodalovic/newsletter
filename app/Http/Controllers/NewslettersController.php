<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mailers\AppMailer;
use App\Subscription;


class NewslettersController extends Controller
{

    public function register()
    {
        return view('signup');
    }

    public function postRegister(SubscriptionRequest $request, AppMailer $mailer)
    {
        $subscription = Subscription::create($request->all());

        $mailer->sendEmailConfirmationFor($subscription);

        return redirect()->back();
    }

    public function confirmEmail($token)
    {
        Subscription::whereToken($token)->firstOrFail()->confirmEmail();

        flash('You are now confirmed!');

    }


}
