<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function create () {
        return view('posts.create');
    }

    public function show($post, $category) {
        return view('posts.show', [
            'post' => $post,
            'category'=> $category
        ]);

    }
}
