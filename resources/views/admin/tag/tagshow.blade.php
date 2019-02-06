@extends('admin.layouts.app')

@section('title','Tags Lists')

@section('content')
<div class="content">
	
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tags Lists
        <small>tags lists</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tag List Tables</h3>
              <a href="{{ route('tag.create') }}" class="btn btn-success pull-right">Create New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tag Name</th>
                  <th>Tag Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tags as $tag)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td><button class="btn btn-xs btn-primary" data-tagname="{{ $tag->name }}" data-tagslug="{{ $tag->slug }}" data-tagid="{{ $tag->id }}" data-toggle="modal" data-target="#tagEdit"><span class="fa fa-edit"></span></button></td>
                    <td>
                      <form id="tagdelete-{{ $tag->id }}" action="{{ route('tag.destroy',$tag->id) }}" method="post" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                      </form>

                      <button class="btn btn-xs btn-warning" onclick="if (confirm('Are you Sure Delete this ?? ')) {
                        event.preventDefault();
                        document.getElementById('tagdelete-{{ $tag->id }}').submit();
                      }else{event.preventDefault();}"><span class="fa fa-trash"></span></button>
                    </td>
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

</div>


<!-- Modal -->

  <div class="modal fade" id="tagEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Tags</h4>
      </div>
        <!-- form start -->
        <form role="form" action="{{ route('tag.update',$tag->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PATCH') }}
              @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                @endforeach

            <div class="modal-body">
                <input type="hidden" id="tagid" name="tagid" value="">
              <div class="box-body">
                <div class="form-group">
                  <label for="tagname">Tag Name</label>
                  <input type="text" class="form-control" name="tagname" id="tagnameid" placeholder="Enter Tag Name" >
                </div>
                <div class="form-group">
                  <label for="tagslug">Tag Slug</label>
                  <input type="text" class="form-control" name="tagslug" id="tagslugid" placeholder="Enter Tag Slug" >
                  </div>
              </div>
              <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('tag.index') }}" class="btn btn-warning post-back">Back</a>
                </div>

            </div>
            </form>
      
    </div>
  </div>
</div>

@endsection
