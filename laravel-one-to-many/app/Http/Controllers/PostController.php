<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

      $posts = Post::all();
      return view('home', compact('posts'));
    }

    public function edit($id) {

      $post = Post::findOrFail($id);
      $categories = Category::all();
      return view('edit-post', compact('post'));
    }
}
