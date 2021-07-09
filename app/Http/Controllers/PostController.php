<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

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


            $format =  $request -> format;



           $post_feature = [



            'format'      => $request -> format,
            'audio_file'  => $request -> audio_file,
            'video_file'  => $request -> video_file,
            'image'       => $unique_file_name,
            'gallery'     => $gallery_arr,





        ];




       $data = Post::Create([
           
           'title' => $request -> title,
           'slug' => str::slug($request -> title),
           'content' => $request -> content,
           'featured' => json_encode($post_feature),
           'format'   => $format



        ]);


       $data -> categories() -> attach($request -> category);
       $data -> tags() -> attach($request -> tag);


            





      return response()->json(['success','value added Successful']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function postShow()
    {


        $data = Post::latest()->get();


        $i = 1;
     foreach ($data as $element) { ?>

                                        <tr>
                                            <td><?php echo $i; $i++ ?></td>
                                            <td><?php echo $element -> title; ?></td>
                                            <td><?php echo $element -> slug; ?></td>
                                            <td><?php foreach ($element -> categories as $category): ?>
                                                <?php echo $category -> name; ?>
                                            <?php endforeach ?></td>
                                            <td>

                                                <?php foreach ($element -> tags as $tag): ?>

  
                                            <span class="badge badge-info"><?php echo $tag -> name; ?></span> 
                                                
                                            <?php endforeach ?>



                                        </td>
                                            <td><?php echo $element -> format; ?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-info">Edit</a>
                                                <a href="" id="post_delete_id" post_del_id="<?php echo $element -> id ?>" class="btn btn-sm btn-warning">Delete</a>
                                                <a href="" class="btn btn-sm btn-warning">Status</a>
                                            </td>
                                        </tr>
          
     <?php   }   
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
    // public function postDestory($id)
    // {








    //     $data = Post::find($id);
        

    //     $data -> delete();
      
    // }







 public function postDestory($id) {


    // $news        = Post::findOrFail($id);

     // $reveal     =  $news -> featured;

     // $ranjha     = json_decode($reveal);

    //  // $naval      = $ranjha -> image;

     // $nav_gal    = $ranjha -> gallery;

     // $gal        = json_encode($nav_gal);


    //  $gallery    = json_decode($gal);


    //  $gal_length = count($gallery);


     // $image = '/media/post/'.$naval;
     // $gallery[] = '/media/post/'.$nivana;




     // if (file_exists($path.$image)) {
     //     unlink($path.$image);

     //     $news -> delete();
     // }








    //    $gal_length = count($gallery);
    //    for ($i = 0; $i < $gal_length; $i++) {
    //        unlink(public_path("media/post/".$gallery[$i]));
    //    }
    //    $data->delete();

    





     // $image = '/media/post/'.$naval;
     // $gallery[] = '/media/post/'.$nivana;


     // $path = str_replace('\\', '/', public_path());

     // if (file_exists($path.$image)) {
     //     unlink($path.$image);

     //     $news -> delete();
     // }elseif (file_exists($path.$gallery[]) ) {
     //      unlink($path.$gallery[]);

     //      $news -> delete();
     // }else{
     //    $news -> delete();
     // }


       $news        = Post::findOrFail($id);
       $feature     = $news -> featured;
       $ranjha      = json_decode($feature); 
       $gallery     = $ranjha -> gallery;
       $gal         = json_encode($gallery);
       $gal_images  = json_decode($gal);
       $length = count($gal_images);

         for ($i = 0; $i < $length; $i++) {
           unlink(public_path("media/post/".$gal_images[$i]));
       }

       $news -> delete();






    $naval      = $ranjha -> image;

    $image = '/media/post/'.$naval;

    $path = str_replace('\\', '/', public_path());



     $path = str_replace('\\', '/', public_path());

    if (file_exists($path.$image)) {
        unlink($path.$image);

        $news -> delete();
    }












}



}
