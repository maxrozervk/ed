@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Edit Tag')
@section('headScript')

@endsection

@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Tag</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Tag</li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
@section('content')
 <!-- Default box -->
 <form role="form" class="form-horizontal" method="POST" action="/tag/{{$data['tag']['0']['tag_id']}}">
  @csrf
  @method('PUT')
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tag</h3>


    </div>
    <div class="card-body">

      <div class="form-group">
        <label for="tagTitle">Tag Title</label>
        <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
        <input type="text" class="form-control form-control-sm" id="tagTitle" name="tag_title" placeholder="tag Title" value="{{$data['tag']['0']['tag_title']}}" >
      </div>
      <div class="form-group">
        <label for="tagSlug">Tag Slug</label>
        <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
        <input type="text" class="form-control form-control-sm" id="tagSlug" name="tag_slug" placeholder="tag Slug" value="{{$data['tag']['0']['tag_slug']}}" >
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
</form>

@endsection

@section('bodyScript')

@endsection
