<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Police Nationale du Burundi</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>


  <meta name="theme-color" content="#563d7c">


  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  html {
    font-size: 14px;
  }
  @media (min-width: 768px) {
    html {
      font-size: 16px;
    }
  }

  .container {
    max-width: 960px;
  }

  .pricing-header {
    max-width: 700px;
  }

  .card-deck .card {
    min-width: 220px;
  }

  .is_active{
    background: gold;
  }
  </style>
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">POLICE NATIONALE DU BURUNDI</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark {{ add_active('articles.index') }}" href="{{ route('articles.index') }}">Articles</a>
      <a class="p-2 text-dark {{ add_active('slides.index') }}" href="{{ route('slides.index') }}">Slides</a>
      <a class="p-2 text-dark {{ add_active('publicites.index') }}" href="{{ route('publicites.index') }}">Publicité</a>
      <a class="p-2 text-dark {{ add_active('publications.index') }}" href="{{ route('publications.index') }}">Publication</a>
      <a class="p-2 text-dark {{ add_active('contacts.index') }}" href="{{ route('contacts.index') }}">Contacts</a>
      <a class="p-2 text-dark {{ add_active('apropos.index') }}" href="{{ route('apropos.index') }}">A propos</a>
      <a class="p-2 text-dark {{ add_active('commessarias.index') }}" href="{{ route('commessarias.index') }}">Commissariat</a>
      <a class="p-2 text-dark {{ add_active('files.index') }}" href="{{ route('files.index') }}">Document</a>
      <a class="p-2 text-dark {{ add_active('socialnetworks.index') }}" href="{{ route('socialnetworks.index') }}">Facebook</a>
      
      



        

        <div class="text-right">
          <form method="POST" action="{{ route('logout') }}">
                   @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   this.closest('form').submit();">
                       <i class="fa fa-sign-out" aria-hidden="true"></i>
                       Déconnexion
                 </x-jet-dropdown-link>
            </form>
        </div>

       
   
    </nav>
  
  </div>

 

  <div class="container">

     @yield('content')
    
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
      
    </footer>
    <script src="{{ asset('./js/jquery-3.5.1.js') }}"></script>

    @yield('javascript')
</body>
</html>