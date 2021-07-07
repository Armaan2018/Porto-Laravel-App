<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        return view('backend.post.post',compact('category','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {


          $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('media/post/'), $unique_file_name);
        }


           $gallery_arr = [];

            if ($request -> hasFile('gallery')) {


              foreach ($request -> file('gallery') as $gallery ) {
                
                $unique_gall_name = md5(time().rand()).'.'. $gallery -> getClientOriginalExtension();
                $gallery -> move(public_path('media/post/'),$unique_gall_name);
                array_push($gallery_arr, $unique_gall_name);
              }



            }



           $post_feature = [



            'format'      => $request -> format,
            'audio_file'  => $request -> audio_file,
            'video_file'  => $request -> video_file,
            'image'       => $unique_file_name,
            'gallery'     => $gallery_arr,





        ];




        Post::Create([
           
           'title' => $request -> title,
           'slug' => str::slug($request -> title),
           'content' => $request -> content,
           'featured' => json_encode($post_feature),


        ]);

            





      return response()->json(['success','value added Successful']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
