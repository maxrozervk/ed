<!DOCTYPE html>
<html>
<head>
  @include('webUserView.inc.head')
  @include('webUserView.inc.script')
</head>
<body>

@include('webUserView.inc.navMenu')

<div class="container-fluid">
  <div class="row">
    <img src="{{asset('/img/a.jpg')}}"  width="100%" height="325" alt="Cinque Terre" style="border: none;padding: 0px" >
  </div>

  <div class="row"  style="padding: 25px 0% 5% 40px;">
    <div class="col-md-9">
        <!-- Blog List -->
        @yield('post')
        <!-- ./Blog List -->
    </div>
    <div class="col-md-3">
        <h2>Latest Article</h2>
        <!-- Latest Artical Title -->
            @yield('latestArticleTitle')
    	    
    	<!-- Latest Artical Title -->
        
    </div>
  </div>

  <!-- ./Content -->
  <!-- Footer -->
  @include('webUserView.inc.footer')
  <!-- ./Footer -->
</div>


</body>
</html>