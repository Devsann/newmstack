@extends('admin.layouts.app')

@section('title','Home')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="margin-top:60px;">
        Post Creator
        {{-- <small>Advanced form element</small> --}}
      </h1>

      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            	@foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter Post Title">
                </div>

                <div class="form-group">
                  <label for="subtitle">Post Sub Title</label>
                  <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter Post SubTitle">
                </div>

                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Post Slug Name">
                </div>

                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <!-- Main content -->
			    <section class="content">
			      <div class="row">
			        <div class="col-md-12">
			          <div class="box box-info">
			            <div class="box-header">
			              <h3 class="box-title">CK Editor
			                <small>Advanced and full of features</small>
			              </h3>
			              <!-- tools box -->
			              <div class="pull-right box-tools">
			                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
			                        title="Collapse">
			                  <i class="fa fa-minus"></i></button>
			                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
			                        title="Remove">
			                  <i class="fa fa-times"></i></button>
			              </div>
			              <!-- /. tools -->
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body pad">
			                    <textarea id="editor1" name="body" rows="10" cols="80">
			                                            This is my textarea to be replaced with CKEditor.
			                    </textarea>
			            </div>
			          </div>
			          <!-- /.box -->


			          		<div class="box-footer">
			                	<button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('post.index') }}" class="btn btn-default post-back">Back</a>
			              	</div>
			            </form>
			          </div>
			          		
			          </div>
			        </div>
			        <!-- /.col-->
			      </div>
			      <!-- ./row -->
			    </section>
    <!-- /.content -->
    </section>

  </div>
  <!-- /.content-wrapper -->

@endsection
