<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public static function sendWelcomeEmail($name, $email, $verificationCode)
    {
        //
        $data = [
            'name' => $name,
            'verification_code' => $verificationCode
        ];

        Mail::to($email)->send(new welcomeMail($data));
    }
}
