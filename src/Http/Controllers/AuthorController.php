<?php


namespace fjerbi\ultimateblog\Http\Controllers;

use fjerbi\ultimateblog\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function profile($name)
    {
        $author = User::where('name',$name)->first();
        $stories = $author->stories()->approved()->published()->get();
        return view('ultimateblog::authorprofile',compact('author','stories'));
    }
}
