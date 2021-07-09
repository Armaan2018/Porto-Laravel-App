@extends('backend.layouts.app')




@section('shakebaby')

{{-- <h2>this is where to put your content</h2> --}}




<div class="container-fluid">
                <div class="row">
              
                 
                    <div class="col-md-4">
                    <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Create New Post</a>
                    </div>



                </div>


                <div class="row">
<div class="col-md-12" style="padding-top: 50px;">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Posts</h4>
                                <p class="category">All Published Post Here</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Category</th>
                                        <th>Tag</th>
                                        <th>Format</th>
                                        <th>Action</th>
                                    </tr></thead>
                                    <tbody id="post_tbody">



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="
    background-color: #ecebeb;">

        <div class="card" style="
    padding: 25px; background-color: #ecebeb;">

    <div class="card-header">
    <h2>Create New Post</h2>
  </div>



<form id="post_form" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
@csrf


 <div class="form-group">
    <label for="exampleFormControlSelect1">Select Post Type</label>
    <select class="form-control" id="post_format" name="format">
     <option disabled="" selected="">Select Post Format</option>
      <option value="image">Image</option>
      <option value="video">Video</option>
      <option value="audio">Audio</option>
      <option value="gallery">Gallery</option>    
    </select>
  </div>

  <div class="form-group" id="audio">
    <label for="audio">Spotify Audio link</label>
    <input type="text" name="audio_file" class="form-control" id="exampleFormControlInput1" placeholder="audio link">
  </div>   

  <div class="form-group" id="video">
    <label for="exampleFormControlInput1">youtube Video link</label>
    <input type="text" name="video_file" class="form-control" id="exampleFormControlInput1" placeholder="video link">
  </div>

  <div class="form-group" id="image">
    <label for="exampleFormControlFile1">Feature Image</label>
    <input type="file" class="dropify" name="image" id="exampleFormControlFile1">
  </div>


<div class="row" id="gallery">
    <div class="col-md-6">
          <div class="form-group" id="video">
      <input type="file" name="gallery[]" multiple="">
  </div> 
    </div>
    <div class="col-md-6">
        <img src="https://i2.wp.com/copaamericacom.wpcomstaging.com/wp-content/uploads/MOTM_M22.png?fit=750%2C424&ssl=1" width="300px">
    </div>
</div>



<div class="" id="basicEditor">

  <div class="form-group">
    <label for="title">Post Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Post Title">
  </div>

 <div class="form-group">
    <label for="Category">Category</label>
    <select class="form-control" id="Category" name="category">

        <option disabled="" selected="" >Select Category</option>
        @foreach ($category as $element)
            <option value='{{ $element -> id}}'>{{ $element -> name}}</option>
        @endforeach
    </select>
  </div>

<label for="title">Tags</label>
<div class="qtagselect" >
  <select class="qtagselect__select" multiple width="100%" name="tag[]">

    @foreach ($tag as $element)
    <option value="{{ $element -> id}}" class="isblue">{{ $element -> name}}</option>
    @endforeach
    

  </select>
</div>




  <div class="form-group" style="padding:9px 0px 9px 0px ">
    <label for="content">Write Your Content Here</label>
    <textarea name="content" class="form-control" id="content" rows="5"></textarea>
  </div>





<div class="form-group">
  <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Publish Now</button>
      </div>
  </div>
</div>

</div>



</form>
        </div>



    </div>
  </div>
</div>













            </div>











@endsection