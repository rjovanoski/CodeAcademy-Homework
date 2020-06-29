@extends('layout')
  
@section('content')      
  
  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Heading One</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Heading Two</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Heading Three</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              <a href="#" class="btn btn-success btn-lg">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!--HOME ICON SECTION  -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cog fa-3x mb-2"></i>
          <h3>Turning Gears</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cloud fa-3x mb-2"></i>
          <h3>Sending Data</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cart-plus fa-3x mb-2"></i>
          <h3>Making Money</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOME HEADING SECTION -->
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1>Are You Ready To Get Started?</h1>
            <p class="d-none d-md-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis
              consequatur soluta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eveniet blanditiis incidunt iusto corrupti illum
            cum laudantium ex sequi amet.</p>
          <a href="about.html" class="btn btn-outline-danger btn-lg">Learn More</a>
        </div>
        <div class="col-md-6">
          <img src="img/laptop.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO PLAY -->
  <section id="video-play">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a href="#" class="video" data-video="https://www.youtube.com/embed/HnwsG9a5riA" data-toggle="modal" data-target="#videoModal">
              <i class="fas fa-play fa-3x"></i>
            </a>
            <h1>See What We Do</h1>
          </div>
        </div>
      </div>
    </div>
      <!-- VIDEO MODAL -->
      <div class="modal fade" id="videoModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
                <iframe src="" frameborder="0" height="350" width="100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- PHOTO GALLERY -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
        <div class="row mb-4">

          @foreach ($gallery as $image)
            <div class="col-md-4 mt-4">                   
              <a href="{{$image->file}}" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                <img src="{{$image->file}}" alt="{{$image->title}}" class="img-fluid">
              </a>
            </div>
          @endforeach 
                   
        </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section id="newsletter" class="text-center p-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Sign Up For Our Newsletter</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates
            vero repellendus architecto maiores recusandae mollitia?</p>
          <form class="form-inline justify-content-center">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Name">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Email">
            <button class="btn btn-primary mb-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection