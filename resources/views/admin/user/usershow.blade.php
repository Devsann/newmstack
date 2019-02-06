@extends('admin.layouts.app')

@section('title','Home')

@section('content')
<section class="content">
      
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Users Lists
        <small>users lists</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users List Tables</h3>
              <a href="{{ route('user.create') }}" class="btn btn-success pull-right">Create New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                	<th>No</th>
                  	<th>User Name</th>
                  	<th>Email</th>
                  	<th>Created_at</th>
                  	<th>Updated_at</th>
                  
                </tr>
                </thead>
                <tbody>
                	<tr>
                		<td></td>
                		<td></td>
                	</tr>
                
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
