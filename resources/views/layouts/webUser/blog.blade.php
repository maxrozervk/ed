<!DOCTYPE html>
<html>
<head>
  @include('webUserView.inc.head')
  @include('webUserView.inc.meta')
  @include('webUserView.inc.script')
</head>
<body>

@include('webUserView.inc.navMenu')

<div class="container-fluid">
  <div class="row">
    {{-- blOG Post Image --}}
    @yield('blogPostImage')
    {{-- ./blOG Post Image --}}

  </div>

  <div class="row"  style="padding: 25px 0% 0% 40px;">
    <div class="col-md-9">
      <h2>@yield('blogPostTitle')</h2>

      <p>
        @yield('blogPostContent')
      </p>


    
    </div>
    <div class="col-md-3">
      <h2>Latest Article</h2>


      <!-- Latest Artical Title -->
      @yield('blogLatestArticleTitle')
     
      <!-- Latest Artical Title -->
    </div>
  </div>

  <div class="row" style="padding: 10px 0% 10% 40px;text-align: justify;">
    <div class="col-md-9">
      
      
    </div>
    <div class="col-md-3">
    </div>
  </div>
  <!-- ./Content -->
  <!-- Footer -->
  @include('webUserView.inc.footer')
  <!-- ./Footer -->
</div>


</body>
</html>