<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.post.tag');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tagCreate(Request $request)
    {
         $request -> validate([
            'name' => 'required|unique:tags|max:10'
         ]);


         Tag::create([

            'name' => $request -> name,
            'slug' => str::slug($request -> name),

         ]);

         return response()->json(['success','value added successful']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function tagShow()
    {


        $data = Tag::latest()->get();


        $i = 1;
        foreach ($data as $tag) {?>


                                                       <tr>
                                            <td><?php echo $i; $i++ ?></td>
                                            <td><?php echo $tag -> name; ?></td>
                                            <td><?php echo $tag -> slug; ?></td>
                                            <td><span class="badge badge-info">Published</span></td>
                                            <td>
                                                <a href="#tag_edit_modal" id="tag_edit_id" tag_edit_id="<?php echo $tag -> id ?>" data-toggle="modal" class="btn btn-sm btn-info">
                                                    Edit
                                                  </a> 
                                                  <a href="" id="tag_delete_id" tag_del_id="<?php echo $tag -> id ?>" class="btn btn-sm btn-warning">
                                                    Delete
                                                  </a>
                                            </td>
                                           
                                        </tr>     



      <?php }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function tagEdit($id)
    {
        $data = Tag::find($id);

        return[



            'name' => $data -> name,
            'id' => $data -> id,






        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function tagUpdate(Request $request)
    {

        $request -> validate([


            'name' => 'required|unique:tags|max:10'




        ]);


        $id = $request -> id;


        $data =Tag::findOrFail($id);

        $data -> name = $request -> name;
        $data -> slug = str::slug($request -> name);
        $data -> update();



        return response() -> json(['success','value added successful']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function tagDestory($id)
    {

        $data = Tag::find($id);
        $data -> delete();
        
    }
}
