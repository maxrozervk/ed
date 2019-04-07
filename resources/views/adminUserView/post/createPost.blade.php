@extends('layouts.adminUser.adminLayout')
@section('pageTitle','Add Post')
@section('headScript')
  {{-- bootstrap wysihtml5 - text editor --}}
  <link rel="stylesheet" href="{{asset("/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">

  {{-- Ckeditor --}}
  <script src="{{asset("/admin/addOn/ckeditor/ckeditor.js")}}"></script>

   <!-- Select2 -->
  <link rel="stylesheet" href="{{asset("/admin/plugins/select2/select2.min.css")}}">
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
    <form role="form" class="form-horizontal" method="POST" action="/post">
      @csrf
      <div class="card ">
        <div class="card-header">
          <h3 class="card-title">Add New Post</h3>

          {{-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div> --}}
        </div>
          {{-- Card Body --}}
          <div class="card-body">
            <div class="form-group">
              <label for="postTitle">Post Title</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postTitle" name="postTitle" placeholder="Post Title">
            </div>
            <div class="form-group">
              <label for="postSubTitle">Post Sub-title</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postSubTitle" name="postSubTitle" placeholder="Post Sub-title">
            </div>

            <div class="form-group">
              <label for="postSlug">Post Slug</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postSlug" name="postSlug" placeholder="Post Slug">
            </div>

            {{-- Row --}}
            <div class="row">
              
              <div class="col-sm-6">

                <div class="form-group">
                  <label for="postImage">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="postImage" name="postImage">
                      <label class="custom-file-label form-control form-control-sm" for="postImage">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tags</label>
                  <select name="postTag" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;" multiple>
                    @foreach($tag as $tag)
                     <option value="{{$tag->tag_id}}">{{$tag->tag_title}}</option>
                    @endforeach
                  </select>
                </div>  


              </div>

              <div class="col-sm-6">

                <div class="form-group">
                  <label>Categories</label>
                  <select name="postCategory" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;" multiple>
                    @foreach($category as $category)
                     <option value="{{$category->category_id}}">{{$category->category_title}}</option>
                    @endforeach
                  </select>
                </div>  

                <br/>
                <br/>
                
                <div class="form-check">
                  <input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1" {{-- name="postStatus" --}} value="1" name="postStatus" checked>
                  <label class="form-check-label" for="exampleCheck1">Publish</label>
                </div>

              </div>

            </div>

            {{-- ./ROw  --}}


            {{-- Ckeditor --}}
            <div class="form-group">
              <label for="postTitle">Post Content</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
               <textarea  class="ckeditor" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="postData"></textarea>
            </div>
            {{-- ./Ckeditor --}}
            
            {{-- Bootstrap Text Area --}}

            {{--  <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea  class="ckeditor" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="postData"></textarea>
              </div>
              <p class="text-sm mb-0">
                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
              </p>
            </div>
          </div> --}}
            {{-- ./Bootstrap Text Area --}}

  
          </div>
          {{-- /.card-body --}}
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Publish</button>
          </div>
          <!-- /.card-footer-->

      </div>
      <!-- /.card -->
    </form>

@endsection

@section('bodyScript')
<!-- Bootstrap WYSIHTML5 -->

<script src="{{asset("/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>

<!-- Select2 -->
<script src="{{asset("/admin/plugins/select2/select2.full.min.js")}}"></script>


<script>
  $(function () {
    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });
   
  });
</script>

<script>
  $(function () {
    
    //Initialize Select2 Elements
    $('.select2').select2();
  });
</script>
@endsection
