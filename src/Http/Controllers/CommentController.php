<?php


namespace fjerbi\ultimateblog\Http\Controllers;

use fjerbi\ultimateblog\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$story)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->story_id = $story;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        
        return redirect()->back();
    }
}
