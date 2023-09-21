<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;
use Exception;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;
use Illuminate\Mail\Message;


//use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $msg = $data['email'] . "\n" . $data['message'];

        FacadesMail::raw($msg, function ($message) use ($data) {
            $message->to('natalsamuel23@gmail.com', 'Samuel Natal')->subject($data['subject']);
            $message->from($data['email'], $data['name']);
        });

       // return response()->json(['message' => 'Email sent successfully'], 200);

        return response()->json([
            'status' => 200,
            'message' => 'Email sent Successfully',
        ]);
    }
}
