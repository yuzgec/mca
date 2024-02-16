<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Contact;
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
            $message->to('info@trinitycollegeturkey.com')->subject($request->name.' Trinity Form');
        });

        return redirect()->back()->with('success', 'Mesajınızı başarıyla aldık. En kısa zamanda sizinle iletişime geçeceğiz.
        ');

    }
}
