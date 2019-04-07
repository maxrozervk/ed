@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Tag Dashboard')
@section('headScript')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin/plugins/datatables/dataTables.bootstrap4.css")}}">
@endsection

@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tag</h1>
            <a href="/tag/create">create</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tag</li>
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
            <th>Tag Id</th>
            <th>Tag Title</th>
            <th>Tag Slug</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data['tag'] as $data)
              <tr>
                <td>{{$data['tag_id']}}</td>
                <td><a href="/tag/{{$data['tag_id']}}">{{$data['tag_title']}}</a></td>
                <td>{{$data['tag_slug']}}</td>
                <td>
                  <form action="/tag/{{$data['tag_id']}}" method="POST">
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
            <th>Tag Id</th>
            <th>Tag Title</th>
            <th>Tag Slug</th>
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
