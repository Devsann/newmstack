@extends('admin.layouts.app')

@section('title','Home')

@section('content')

<section class="content">
      
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Category Lists
        <small>category lists</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category List Tables</h3>
              <a href="{{ route('category.create') }}" class="btn btn-success pull-right">Create New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Category Name</th>
                  <th>Category Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                <tr>
                  <td>{{ $loop->index + 1}}</td>
                  <td>{{ $category-> name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td><button class="btn btn-xs btn-primary" data-cat="{{ $category->name }}" data-catslug="{{ $category->slug }}" data-catid="{{ $category->id }}" data-toggle="modal" data-target="#catEdit" ><span class="fa fa-edit"></span></button>
                  
                  <td>
                    <form id="catdelete-{{ $category->id }}" action ="{{ route('category.destroy',$category->id) }}" method="post" style="display: none;">
                      {{ csrf_field() }}
                      {{ method_field("DELETE") }}
                    </form>

                    <button class="btn btn-xs btn-warning" onclick="if (confirm('Aure U Sure Delete this ?? ')) {
                      event.preventDefault();
                      document.getElementById('catdelete-{{ $category->id }}').submit();
                    }else{
                      event.preventDefault();}"><span class="fa fa-trash"></span></button></td>
                  {{-- video 10 end --}}
                </tr>
                  @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      	</div>
  		</div>
	</section>
</div>

<!-- Modal -->

  <div class="modal fade" id="catEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Category</h4>
      </div>
        <!-- form start -->
        <form role="form" action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PATCH') }}
              @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                @endforeach

            <div class="modal-body">
                <input type="hidden" id="catid" name="catid" value="">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" >
                </div>
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Tag Slug" >
                  </div>
              </div>
              <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('category.index') }}" class="btn btn-warning post-back">Back</a>
                </div>

            </div>
            </form>
      
    </div>
  </div>
</div>
</section>

@endsection
