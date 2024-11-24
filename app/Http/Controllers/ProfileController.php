<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
//dd($posts);
        return view('profile.index', ['title' => 'プロフィール','headline' => $headline, 'posts' => $posts]);
    }    
}


