<?php

namespace App\Http\Controllers;

use App\Content;
use App\Models\Emails;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct(){}

    public function index (){
        return view('home');
    }

    public function setLocale($locale){
        \App::setLocale($locale);
        return view('home');
    }

    public function sendMail(Request $request)
    {
        $messages = [
            'name' =>'The :attribute field is required',
            'email.required' => 'The :attribute field is required.',
            'email.email' => 'The :attribute must be a valid email address.',
            'message' => 'The :attribute field is required.',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'bail|required|email',
            'message' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            \Mail::to('1808aam@gmail.com')->send(new SendMail($details));

            if (\Mail::failures()) {
                return redirect()->back()->with('message', 'Something went wrong!');
            }
            $email = new Emails;

            $email->name = $request->name;
            $email->email= $request->email;
            $email->message= $request->message;
            $email->save();
            return redirect()->back()->with('message', 'Message successfully sent!');
        }
    }
}
