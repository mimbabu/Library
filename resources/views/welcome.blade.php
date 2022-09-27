<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    </head>

    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Book</a>
    <ul class="navbar-nav m-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{('/admin')}}">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('student')}}">Manage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/books')}}">Show book</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Add Book</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}">Register</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





  {{-- <scection class="carusal" Id ="carusal_wrapper">

    <div class="container pt-5 mt-5">
         <div class="row pt-5 mb-5">

          <div class="owl-carousel">
            @foreach ( $lbooks as $b )
                  <div class="item">





                     <div class="card"  style="width:100%;">
                <img class="card-img-top"  src="/image/{{ $b->image }}" width="100%" height="80" class="img-responsive"alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Book Name {{ $b->book_name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author{{ $b->author_name }}</h6>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/details/{{ $b->id }}" class="btn btn-primary">View</a>

             </div>
           </div>


           </div>


@endforeach
      </div>

    </div>

 </scection> --}}



 <scection class="carusal" Id ="carusal_wrapper">

    <div class="container pt-5 mt-5">
         <div class="row pt-5 mb-5">
{{-- <h1>Latest Book</h1>
          <div class="owl-carousel">
            @foreach ( $lbooks as $data )
                  <div class="item">





                     <div class="card"  style="width:100%;">
                <img class="card-img-top"  src="/image/{{ $data->image }}" width="100%" height="80" class="img-responsive"alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Book Name {{ $data->book_name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author{{ $data->author_name }}</h6>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/details/{{ $data->id }}" class="btn btn-primary">View</a>

             </div>
           </div>


           </div>


@endforeach
      </div>

    </div> --}}


    <h1>Book(Poem )</h1>
    <div id = "slider" class="owl-carousel">
      @foreach ( $pbooks as $data )
            <div class="item">





               <div class="card"  style="width:100%;">
          <img class="card-img-top"  src="/image/{{ $data->image }}" width="100%" height="80" class="img-responsive"alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Book Name {{ $data->book_name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Author{{ $data->author_name }}</h6>

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="/details/{{ $data->id }}" class="btn btn-primary">View</a>

       </div>
     </div>


     </div>


@endforeach
</div>

</div>




 </scection>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/jquery.3.6.min.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

<script>
    $('#slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsiveClass:true,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:true
            }
        }
    })
    </script>





    </body>

</html>
