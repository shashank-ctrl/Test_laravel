<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PosttController extends Controller
{
    public function __construct()
    {
        
        $this->post = new Post;

    }

    function index()
    {
        $posts = Post::all();
        //echo "<pre>";print_r($posts);exit;
        
        return view('front.post.postindex', compact('posts'));
    } 


}
