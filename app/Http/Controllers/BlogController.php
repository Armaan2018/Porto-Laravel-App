<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index()
    {


        
    	$data = Post::latest()->get();
    	$category = Category::all();
    	$tag = Tag::all();
    	return view('frontend.index',compact('data','category','tag'));
    }



    public function singlePost($slug){
    	 $data = Post::latest()->get();
    	$category = Category::all();
    	$tag = Tag::all();
    	$single = Post::where('slug',$slug)->first();
    	return view('frontend.single-blog',compact('data','category','tag','single'));
    }
}
