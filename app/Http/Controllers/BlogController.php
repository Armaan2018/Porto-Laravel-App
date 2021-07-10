<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index()
    {

    	$data = Post::latest()->get();
    	return view('frontend.index',compact('data'));
    }
}
