<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;

class MailSendController extends Controller
{
    public function send() {

        $data = [];

        Mail::send('email.test', $data, function($message){
            $message->to('info@example.com', 'Test')->subject('This is a test mail');
        });
    }
}
