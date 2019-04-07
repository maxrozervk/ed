@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Add Category')
@section('headScript')

@endsection

@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Category</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
@section('content')
 <!-- Default box -->
 <form role="form" class="form-horizontal" method="POST" action="/category/{{$data['category']['0']['category_id']}}">
  @csrf
  @method('PUT')
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Category</h3>


    </div>
    <div class="card-body">

      <div class="form-group">
        <label for="categoryTitle">Category Title</label>
        <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
        <input type="text" class="form-control form-control-sm" id="categoryTitle" name="category_title" placeholder="Category Title" value="{{$data['category']['0']['category_title']}}" >
      </div>
      <div class="form-group">
        <label for="categorySlug">Category Slug</label>
        <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
        <input type="text" class="form-control form-control-sm" id="categorySlug" name="category_slug" placeholder="Category Slug" value="{{$data['category']['0']['category_slug']}}" >
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
