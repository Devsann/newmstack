@extends('admin.layouts.app')

@section('title','Tag Creator')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="margin-top:60px;">
        Tag Creator
        {{-- <small>Advanced form element</small> --}}
      </h1>

      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="post">
              @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Tag Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Tag Name">
                </div>

                <div class="form-group">
                  <label for="slug">Tag Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Tag Slug">
                </div>
              </div>
              <!-- /.box-body -->


            <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('tag.index') }}" class="btn btn-default post-back">Back</a>
                </div>
          </div>

            </form>
    </section>
  </div>
  <!-- /.content-wrapper -->

@endsection
