<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('home', compact('posts'));
    }

        Public function post(Post $post)
        {
            //$comment = Comment::where('id', 15)->with('post')->first();
            //dd($comment-post->toArray();
            //dd($post->comments->toArray());
            return view('post', compact('post'));
        }

}
