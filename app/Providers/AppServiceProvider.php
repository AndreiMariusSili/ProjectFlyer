<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return bool
     */
    public function boot()
    {
        Validator::extend('notTaken', function($attribute, $value, $parameters, $validator)
        {
            $users = \App\User::get();

            $emails = [];

            foreach($users as $user)
            {
                if($user->email !== \Auth::user()->email)
                {
                    array_push($emails, $user->email);
                }
            }

            if (in_array($value, $emails))
            {
                return false;
            }
            else
            {
                return true;
            }
            
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
