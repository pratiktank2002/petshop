<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Auth;
use App\Models\Comments;
use App\Models\Newsletter;

class ContactUsController extends Controller
{
    public function connect(request $request)
    {
        //print_r($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]
        );


        $customer = new Contactus;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->subject = $request['subject'];
        $customer->message = $request['message'];
        $customer->save();

        return redirect()->back();
    }

    public function comment(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'profession' => 'required',
                'comment' => 'required'
            ]
        ); 

        $customer = new Comments;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->profession = $request['profession'];
        $customer->comment = $request['comment'];
        $customer->save();

        return redirect()->back()->with('success', 'thank you for your comment.');
    }

    public function newsletter(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
            ]
        );

        $new_newsletter = new Newsletter;
        $new_newsletter->email = $request['email'];
        $new_newsletter->save();

        return redirect()->back()->with('success', 'your email is register successfully for NewsLetter!.');
    }
}
