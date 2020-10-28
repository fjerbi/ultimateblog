<?php


namespace fjerbi\ultimateblog\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
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
            Toastr::success('Post successfully added to your favorite list :)','Success');
            return redirect()->back();
        } else {
            $user->favorite_stories()->detach($story);
            Toastr::success('Post successfully removed form your favorite list :)','Success');
            return redirect()->back();
        }
    }
}
