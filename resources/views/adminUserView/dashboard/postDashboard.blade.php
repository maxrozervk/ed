@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Post Dashboard')
@section('headScript')
@endsection

@section('content-header')
<div class="container-fluid">
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
@endsection
@section('content')
 <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Post Dashboard</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        {{-- Card Body --}}
        <div class="card-body">

          <div class="container-fluid">
            
              <div class="row" style="padding: 25px">

                <div  class="col-md-2">
                  <div class="column col_logo">
                    <a href="/post" title="">
                      <center>
                        <img src="{{asset("/img/admin/post-dashboard/posts.png")}}" alt="Snow" style="width:50%">
                        <br/>
                        <strong>Posts</strong>
                      </center>
                    </a>
                  </div>
                </div>

                  
                <div  class="col-md-2">
                  <div class="column col_logo">
                    <a href="/category" title="">
                      <center>
                        <img src="{{asset("/img/admin/post-dashboard/categories.png")}}" alt="Snow" style="width:50%">
                        <br/>
                        <strong>Categories</strong>
                      </center>
                    </a>
                  </div>
                </div>

                  
                 <div  class="col-md-2">
                  <div class="column col_logo">
                    <a href="/tag" title="">
                      <center>
                        <img src="{{asset("/img/admin/post-dashboard/tags.png")}}" alt="Snow" style="width:50%">
                        <br/>
                        <strong>Tags</strong>
                      </center>
                    </a>
                  </div>
                </div>



            </div>

          </div>

        </div>
        {{-- /.card-body --}}
        <div class="card-footer">
          {{-- <button type="submit" class="btn btn-primary">Publish</button> --}}
        </div>
        <!-- /.card-footer-->

      </div>
      <!-- /.card -->

@endsection

@section('bodyScript')
@endsection
