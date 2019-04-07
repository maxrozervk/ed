@extends('layouts.adminUser.adminLayout')
@section('headScript')
{{-- bootstrap wysihtml5 - text editor --}}
  <link rel="stylesheet" href="{{asset("/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
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
    <form role="form" class="form-horizontal">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Add New Post</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
          {{-- Card Body --}}
          <div class="card-body">
            <div class="form-group">
              <label for="postTitle">Post Title</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postTitle" placeholder="Post Title">
            </div>
            <div class="form-group">
              <label for="postSubTitle">Post Sub-title</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postSubTitle" placeholder="Post Sub-title">
            </div>

            <div class="form-group">
              <label for="postSlug">Post Slug</label>
              <i class="fa fa-check fa-bell-o fa-times-circle-o"></i>
              <input type="text" class="form-control form-control-sm" id="postSlug" placeholder="Post Slug">
            </div>

            <div class="form-group">
              <label for="postImage">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="postImage">
                  <label class="custom-file-label form-control form-control-sm" for="postImage">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>


            <div class="form-check">
              <input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Publish</label>
            </div>

            {{-- Bootstrap Text Area --}}

             <div class="card card-outline card-info">
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
                <textarea name="postBody" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <p class="text-sm mb-0">
                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
              </p>
            </div>
          </div>
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
<script>
  $(function () {
    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
@endsection
