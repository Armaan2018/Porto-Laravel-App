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
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                        <th>City</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                            <td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                            <td>Baileux</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td>Overland Park</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>$63,542</td>
                                            <td>Malawi</td>
                                            <td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mason Porter</td>
                                            <td>$78,615</td>
                                            <td>Chile</td>
                                            <td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
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


 <div class="form-group">
    <label for="exampleFormControlSelect1">Select Post Type</label>
    <select class="form-control" id="post_format">
     <option disabled="" selected="">Select Post Format</option>
      <option value="image">Image</option>
      <option value="video">Video</option>
      <option value="audio">Audio</option>
      <option value="gallery">Gallery</option>
      
    </select>
  </div>

            <form id="preque">




  <div class="form-group" id="audio">
    <label for="audio">Spotify Audio link</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="audio link">
  </div>   

  <div class="form-group" id="video">
    <label for="exampleFormControlInput1">youtube Video link</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="video link">
  </div>

<div class="row" id="image">

<input type="file" class="dropify" data-default-file="url_of_your_file" />

</div>



<div class="row" id="gallery">
    <div class="col-md-6">
          <div class="form-group" id="video">
      <input type="file" name="image">
  </div> 
    </div>
    <div class="col-md-6">
        <img src="https://i2.wp.com/copaamericacom.wpcomstaging.com/wp-content/uploads/MOTM_M22.png?fit=750%2C424&ssl=1" width="300px">
    </div>
</div>



  








  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" id="title" placeholder="Post Title">
  </div>

 <div class="form-group">
    <label for="Category">Category</label>
    <select class="form-control" id="Category">

        <option disabled="" selected="">Select Category</option>
        @foreach ($category as $element)
            <option value='{{ $element -> id}}'>{{ $element -> name}}</option>
        @endforeach
     

      
    </select>
  </div>

<label for="title">Tags</label>
<div class="qtagselect" >
  <select class="qtagselect__select" multiple width="100%">

    @foreach ($tag as $element)
    <option value="{{ $element -> id}}" class="isblue">{{ $element -> name}}</option>
    @endforeach
    

  </select>
</div>




  <div class="form-group" style="padding:9px 0px 9px 0px ">
    <label for="content">Write Your Content Here</label>
    <textarea class="form-control" id="content" rows="5"></textarea>
  </div>

  <div class="row">

      <div class="col-md-12">
          <a href="" class="btn btn-primary" style="width: 100%;">Publish Now</a>
      </div>

  </div>



</form>
        </div>



    </div>
  </div>
</div>

























@endsection