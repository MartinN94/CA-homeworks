<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactUs;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to(['adress' => $request->email])->send(new ContactUs($request));

        return redirect('contact-us')->with(['message' => 'Mail was send to you!']);
    }
}
