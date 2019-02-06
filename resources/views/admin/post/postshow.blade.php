@extends('admin.layouts.app')

@section('title','Home')

@section('content')

<section class="content">
      
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Product Lists
        <small>product lists</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Products List Tables</h3>
              <a href="{{ route('post.create') }}" class="btn btn-success pull-right">Create New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                	<th>No</th>
                  	<th>Product Title</th>
                  	<th>Product SubTitle</th>
                  	<th>Product Slug</th>
                  	<th>Detail (body)</th>
                  	<th>Edit</th>
                  	<th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach ($products as $product)
                		<tr>
                			<td>{{ $loop->index + 1 }}</td>
		                  <td>{{ $product->title }}</td>
		                  <td>{{ $product->subtitle }}</td> 
		                  <td>{{ $product->slug }}</td>
		                  <td> {{ $product->body }}</td>
		                  <td><a href="{{ route('post.edit' , $product->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
		                  <td>
		                  	<form id="delete-form-{{ $product->id }}" action="{{ route('post.destroy', $product->id) }}" method="post" style="display: none;">
		                  		{{ csrf_field() }}
		                  		{{ method_field("DELETE") }}
		                  	</form>
		                  	<a href="" onclick="if (confirm('Are U Sure , You Want Delete This ? ')) {
		                  		event.preventDefault();document.getElementById('delete-form-{{ $product->id }}').submit();
		                  	}else{
		                  		event.preventDefault();}"><span class="glyphicon glyphicon-trash"></span></a></td>
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
</section>

@endsection
