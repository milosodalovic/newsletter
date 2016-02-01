<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Subscription extends Model {

    protected $table = 'subscriptions';
    protected $fillable = [ 'name', 'surname', 'email' , 'confirmed', 'token'];

    public static function boot()
    {
        parent::boot();

        static::creating(function($subscription)
        {
            $subscription->token = str_random(30);
        });
    }

    public function confirmEmail()
    {
        $this->confirmed = true;
        $this->token = null;
        $this->save();
    }

}
