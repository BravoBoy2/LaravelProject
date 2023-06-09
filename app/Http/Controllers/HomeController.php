<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        

        // new code //

      

        // ends here \\

        return view('home', ['posts' => $posts]);
    }

    public function about()
    {
        return view('about');
    }

    public function search(){

        if (request('search')) {
            $users = User::where('name', 'description', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }
    }

    
}
