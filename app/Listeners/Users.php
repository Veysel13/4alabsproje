<?php


namespace App\Listeners;

use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Mail;

class Users
{

    public function newUserCreate($users){

        Mail::queue(new NewUserNotification($users));
    }

}
