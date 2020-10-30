<?php

namespace fjerbi\ultimateblog\Http\Controllers;

use fjerbi\ultimateblog\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:subscribers'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        Toastr::success('Thank you for subscribing to the blog, you will get news  :)','Success');
        return redirect()->back();
    }
}