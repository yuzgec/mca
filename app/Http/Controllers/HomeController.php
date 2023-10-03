<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function form(OrderRequest $request){

        $New = new Contact;
        $New->name =  $request->name;
        $New->subject =  $request->subject;
        $New->email =  $request->email;
        $New->message =  $request->message;
        $New->save();

        Mail::send("frontend.mail.form",compact('request'),function ($message) use($request) {
            $message->to('olcayy@gmail.com')->subject($request->name.' MCA Website Form');
        });

        return redirect()->back()->with('success', 'We received your message successfully. We will contact you as soon as possible.');

    }
}
