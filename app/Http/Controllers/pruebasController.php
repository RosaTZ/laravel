<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebasController extends Controller
{
  function index(){
    $post = ['post1', 'post2'];
    // return view('contact', ['post' => $post]);
    return view('contact', compact('post'));
  }

  function otro($post) {
    echo $post;
  }
}
