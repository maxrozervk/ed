@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Post Dashboard')
@section('headScript')
@endsection

@section('content-header')

{{-- <div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Post</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Post</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
 --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
      <a href="{{ asset('sitemap-generator') }}">
        sitemap
      </a>
    </div>
  </div>
</div>
@endsection

@section('bodyScript')
@endsection
