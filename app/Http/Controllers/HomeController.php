<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function sendEmail(Request $request) {
        $data = $request->validate([
            "name" => "required|string|max:200",
            "email" => "required|string|max:200",
            "message" => "required|string|max:200",
        ]);
        Mail::to("admin@example.com")->send(new ContactMail($data));

        return back()->with("success", "Email berhasil dikirim!");
    }
}
