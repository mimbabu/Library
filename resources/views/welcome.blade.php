<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" integrity="sha512-itF/9I/NigY9u4ukjw9s7/kG6SC7LJ5Q4pRNMnTbGZAsO4/RSUelfVuYBk8AkSk23qEcucIqdUlzzpy2qf7jGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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





  <scection class="carusal" Id ="carusal_wrapper">

    <div class="container pt-5 mt-5">
         <div class="row pt-5 mb-5">

          <div class="owl-carousel">
            @foreach ( $books as $b )
                  <div class="item">





                     <div class="card"  style="width:100%;">
                <img class="card-img-top"  src="/image/{{ $b->image }}" width="100%" height="80" class="img-responsive"alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Book Name {{ $b->book_name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author{{ $b->author_name }}</h6>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>

             </div>
           </div>


           </div>



           {{-- <div class="item">


              <div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>
           </div>
                  <div class="item">
                  <div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>
                </div>

                  <div class="item">
                  <div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>
          </div>
                  <div class="item"><div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>
          </div>
                  <div class="item"> <div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>

          </div>
                  <div class="item"> <div class="card"  style="width:100%;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Book Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Borrow</a>
             </div>
           </div>
           </div>
          </div> --}}

          @endforeach
      </div>

    </div>

 </scection>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
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
            loop:false
        }
    }
})
</script>

    </body>

</html>
