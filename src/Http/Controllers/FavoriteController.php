<?php


namespace fjerbi\ultimateblog\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($story)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_stories()->where('story_id',$story)->count();

        if ($isFavorite == 0)
        {
            $user->favorite_stories()->attach($story);
         
            return redirect()->back();
        } else {
            $user->favorite_stories()->detach($story);
           
            return redirect()->back();
        }
    }
}
