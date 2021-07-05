<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {


    	return view('backend.post.category');
    }


    public function store(Request $request)
    {

       $request -> validate([


        'name' => 'required|unique:categories|max:9'




       ]);


     Category::create([


    		'name' => $request -> name,
    		'slug' => str::slug($request -> name)



    	]);


    	// return response()->json('success','Category Added Successful');
    	return response()->json(['success','value added succesfull']);
    }


    public function showCategory()
    {

    	$data = Category::latest()->get();

    	$i = 1;


    	foreach ($data as $element) { ?>

                                           <tr>
                                        	<td><?php echo $i; $i++ ?></td>
                                        	<td><?php echo $element -> name; ?></td>
                                        	<td><?php echo $element -> slug; ?></td>
                                        	<td><span class="badge badge-info">Published</span></td>
                                        	<td>
                                        		<a href="#edit_modal" id="edit_id" edit_id="<?php echo $element -> id ?>" data-toggle="modal" class="btn btn-sm btn-info">
                                        			Edit
                                        	      </a> 
                                        	      <a href="" id="delete_id" del_id="<?php echo $element -> id ?>" class="btn btn-sm btn-warning">
                                        			Delete
                                        	      </a>
                                        	</td>
                                           
                                        </tr>

    		
    	<?php }
    	
    }




    public function destoryCategory($id){

    	$data = Category::findOrFail($id);
    	$data -> delete();

    }



    public function editCategory($id){

    	$data = Category::find($id);


    	return [


    		'name' => $data -> name,
    		'id' => $data -> id,


    	];

    }


         public function update(Request $request)
    {



        $request -> validate([


            'name' => 'required|unique:categories|max:9'






        ]);


        $id = $request -> id;

        $data = Category::findOrFail($id);

        $data-> name = $request -> name;
        $data-> slug = Str::slug($request -> name);

        $data -> update();


        return response()->json(['success','value added succesfull']);


        
    }






    // public function update(Request $request)
    // {
    // 	        $request -> validate([

    //         'name' => 'required|unique:categories|max:9'

    //     ]);

    // 	        $id = $request -> id;
    // 	        $data = Category::find($id);
    // 	        $data -> name = $request -> name;
    // 	        $data -> slug = str::slug($request -> name);
    // 	        $data -> update();
    // 	        return redirect()->back();
    // }
}
