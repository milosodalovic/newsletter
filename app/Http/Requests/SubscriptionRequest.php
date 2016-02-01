<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Mailers\AppMailer;
use App\Subscription;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Exception\HttpResponseException;

class SubscriptionRequest extends Request
{
    protected $mailer;

    public function __construct(AppMailer $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:subscriptions'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $messages = $validator->errors();

        if($messages->has('email', '<p>:The email has already been taken.</p>'))
        {
           $subscription = Subscription::where('email' , $this->request->get('email'))->first();

            if(!$subscription->confirmed)
            {
                $this->mailer->sendEmailConfirmationFor($subscription);

            }
            else
            {
                $messages = ['email.unique:subscriptions' => 'That email address is already signed up'];

                $validator->getMessageBag()->merge($messages);
                $this->mailer->sendEmailRejectionFor($subscription);
            }


        }

        throw new HttpResponseException($this->response(
            $this->formatErrors($validator)
        ));
    }
}
