@extends('admin.layouts.app')

@section('title','Home')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="margin-top:60px;">
        Category Creator
        {{-- <small>Advanced form element</small> --}}
      </h1>

      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
              @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                </div>

                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Tag Slug">
                  </div>
              </div>
              <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('category.index') }}" class="btn btn-warning post-back">Back</a>
                </div>
            </form>
          </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

@endsection
