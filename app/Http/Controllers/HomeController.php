<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function form(Request $request){
        Mail::send("frontend.mail.form",compact('request'),function ($message) use($request) {
            $message->to('olcayy@gmail.com')->subject($request->name.' MCA Website Form');
        });

        redirect()->route('home');

    }
}
