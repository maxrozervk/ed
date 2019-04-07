@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Post Dashboard')
@section('headScript')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin/plugins/datatables/dataTables.bootstrap4.css")}}">
@endsection

@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="display: inline;">Post</h1>
            <a href="/post/create"><i class="fa fa-fw fa-edit"></i></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
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
                  <th>Post Id</th>
                  <th>Post Title</th>
                  <th>Post Created By</th>
                  <th>Post Created On</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data['post'] as $data)
                    <tr>
                      <td>{{$data['post_id']}}</td>
                      <td><a href="/post/{{$data['post_id']}}">{{$data['post_title']}}</a></td>
                      <td>{{$data['post_user_id']}}</td>
                      <td>{{$data['created_at']}}</td>
                      <td>
                        <form method="POST" action="/post/{{$data['post_id']}}">
                          @csrf
                          @method('Delete')
                          <input type="submit" name="" value="Delete">
                        </form>
                      </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Post Id</th>
                  <th>Post Title</th>
                  <th>Post Created By</th>
                  <th>Post Created On</th>
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
