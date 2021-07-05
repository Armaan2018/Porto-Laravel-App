@extends('backend.layouts.app')




@section('shakebaby')

{{-- <h2>this is where to put your content</h2> --}}




<div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add A New Category</h4>
                            </div>
                            <div class="content">
                                <form id="category_form" method="POST" action="{{ route('category.store') }}">
                                	@csrf
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category name</label>
                                                <input type="text" class="form-control" placeholder="category" name="name" >
                                                 <span class="text-danger" id="error-category"></span>
                                            </div>
                                        </div>

                                    </div>




                                    <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8">
                    	<div class="card">
                            <div class="header">
                                <h4 class="title">Category Table</h4>
                                <p class="category">Here is a category list</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                    	<th>Category Name</th>
                                    	<th>Slug</th>
                                    	<th>Status</th>
                                    	<th>Action</th>
                                    </tr></thead>
                                    <tbody id="category_tbody">






                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>








<!-- Button trigger modal -->


<!-- Modal -->

















                </div>
            </div>


<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form id="category_update_form" action="{{ route('category.update') }}" method="POST">
	@csrf
  <div class="form-group">

  	<span class="text-danger" id="error-category"></span>
    <label for="categoryEdit">Category</label>
    <input type="text" class="form-control" name="name"  placeholder="Edit Category" >

    <input type="hidden" name="id" >

    <small  class="form-text text-muted">Edit Category Instantly</small>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection