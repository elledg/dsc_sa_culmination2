<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{

    public function index(){
        $posts = Post::latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id){
        $post = Post::where('post', $id)->firstOrFail();
    }
}
