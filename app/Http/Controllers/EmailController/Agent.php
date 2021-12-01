<?php

namespace App\Http\Controllers\EmailController;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendEmailRequest;
use App\Mail\AgentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Agent extends Controller
{
    public function send(SendEmailRequest $request){
        Mail::to($request->email)->send(new AgentMail($request->name, $request->email, $request->phone_number, $request->message));
        return back()->with('success', 'You email has been sent!');
    }
}
