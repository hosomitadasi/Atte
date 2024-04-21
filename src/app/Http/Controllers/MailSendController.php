<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;

class MailSendController extends Controller
{
    public function index(){
        $data = [];
        Mail::send('emails.test', $data, function($message){
            $message->to('abc987@example.com', 'Test')->subject('This is a test mail');
        });
    }
}