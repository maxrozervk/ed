<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  {{-- <script src="/js/app.js"></script> --}}

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
  {{-- Copied From Admine Lte Script --}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Forebase-1.0 | @yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/appdefault.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <script src="{{asset('/js/app.js')}}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

  {{-- <h1>Welcome</h1> --}}

  {{-- <div class="container-fluid"> --}}
  {{-- <div class="container-fluid">

    <div class="row">
      <div class="col-md-6">
        <h2>hi</h2>
      </div>
      <div class="col-md-6">
        <h2>hi</h2>
      </div>
    </div>
    
  </div> --}}

{{-- justify-content-end --}}


<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

   <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Links -->
  <ul class="navbar-nav collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Our Library
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Laravel</a>
        <a class="dropdown-item" href="#">JQuery & Library</a>
        <a class="dropdown-item" href="#">Ubuntu</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="blogTemplate">Blog</a>
    </li>


  </ul>
</nav>

<div class="container-fluid">
  <div class="row" >
    <img src="{{asset('/img/a.jpg')}}"  width="100%" height="325" alt="Cinque Terre" style="border: none;padding: 0px" >
    
  </div>

  <div class="row"  style="padding: 25px 0% 0% 40px;">
    <div class="col-md-9">
      <h2>Title</h2>
    
    </div>
    <div class="col-md-3">
      <h2>Latest Article</h2>
    </div>
  </div>

  <div class="row" style="padding: 10px 0% 10% 40px;text-align: justify;">
    <div class="col-md-9">
      
      <p>
        The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur".

    <img src="{{asset('/img/a.jpg')}}"  width="100%" height="auto" alt="Cinque Terre" style="border: none; padding:2%" >

    <center><h5>Image Title</h5></center>


1914 translation by H. Rackham
"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

1914 translation by H. Rackham
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
      </p>

    </div>
    <div class="col-md-3">
      Latest Artical Title
    </div>
  </div>
  <!-- ./Content -->
  <!-- Footer -->
  <div class="row" style="text-align: center;">
    <div class="col-md-12">
      Aducate is optimized for learning and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, blogs and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 2018-2019 by Aducate. All Rights Reserved.
Powered by Aducate.
    </div>
  </div>
  <!-- ./Footer -->
</div>


</body>
</html>