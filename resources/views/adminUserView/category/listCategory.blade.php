@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Category Dashboard')
@section('headScript')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin/plugins/datatables/dataTables.bootstrap4.css")}}">
@endsection

@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
            <a href="/category/create">create</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Table With Full Features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Category Id</th>
            <th>Category Title</th>
            <th>Category Slug</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data['category'] as $data)
              <tr>
                <td>{{$data['category_id']}}</td>
                <td><a href="/category/{{$data['category_id']}}">{{$data['category_title']}}</a></td>
                <td>{{$data['category_slug']}}</td>
                <td>
                  <form action="/category/{{$data['category_id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" value="Delete">
                  </form>
                </td>
              </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Category Id</th>
            <th>Category Title</th>
            <th>Category Slug</th>
            <th>Delete</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endsection

@section('bodyScript')
<!-- DataTables -->
<script src="{{asset("/admin/plugins/datatables/jquery.dataTables.js")}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
