<?php


namespace fjerbi\ultimateblog\Http\Controllers;

use fjerbi\ultimateblog\Story;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $stories = Story::where('title','LIKE',"%$query%")->approved()->published()->get();
        return view('ultimateblog::search',compact('stories','query'));
    }
}
