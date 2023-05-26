<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SimpleMail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function send(Request $request)
    {
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
        ];
         
        Mail::to('thomas-nixon@thomas-nixon-portfolio.com')->send(new SimpleMail($mailData));
           
        return response()->json([
            'result' => 'email sent successfully'
        ]);
    }
}
