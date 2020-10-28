<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $stories = $user->stories;
        $popular_stories = $user->stories()
            ->withCount('comments')
            ->withCount('favorite_to_users')
            ->orderBy('view_count','desc')
            ->orderBy('comments_count')
            ->orderBy('favorite_to_users_count')
            ->take(5)->get();
        $total_pending_stories = $stories->where('is_approved',false)->count();
        $all_views = $stories->sum('view_count');
        return view('author.dashboard',compact('stories','popular_stories','total_pending_stories','all_views'));
    }
}
