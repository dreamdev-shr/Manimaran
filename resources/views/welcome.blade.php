<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  Audi</title>

    <feature-app id="audi-feature-app-notification" src="https://fa-notifications.cdn.prod.arcade.apps.one.audi/v1.5.4/fh/app.js" orderid="1" config="{&quot;contentType&quot;:&quot;popup&quot;}"><div class="sc-oUcyK iTpJZK"><div class="sc-oUcyK iTpJZK"><div class="popup-group__StyledRef-sc-1ud1zjm-0 flxehs"><div role="region" aria-live="polite" class="popup-group__StyledPopup-sc-1ud1zjm-1 kfOKz"><div class="popup-group__StyledPopupScrollContent-sc-1ud1zjm-2 kWHwNx"><div></div></div></div></div></div></div></feature-app>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
    {{-- style sheet --}}
<link rel="stylesheet" href="{{asset('css/stylr.css')}}">

<body>
{{-- header --}}

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img height="40rem" src="{{asset('imge/111.png')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body"  >
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>






<div class="nav1 p-2  " style=" background-color: rgb(217, 218, 235);" >
<img height="50rem" src="{{asset('imge/111.png')}}" alt=""  class="logo">
<ul class="nav nav-tabs ">


    <li class="nav-item  text-md-left "  style=" color:black" >
      <a class="nav-link text-md-left "  style=" color:black"   href="#">Home</a>
    </li>
    <li class="nav-item dropdown" >
      <a class="nav-link dropdown-toggle text-md-left "   style=" color:black" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Models</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item text-md-left "  style=" color:black" href="#">e-tron GT</a></li>
        <li><a class="dropdown-item  text-md-left  " style=" color:black"   href="#">Rs e-tron GT</a></li>
        <li><a class="dropdown-item text-md-left   "  style=" color:black"   href="#">e-tron</a></li>
        <li><hr class="dropdown-divider text-md-left  "  ></li>
        <li><a class="dropdown-item text-md-left   " href="#"  style=" color:black">e-tron sportback</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link"   style=" color:black" href="#">Used cars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link "    style=" color:black">Innovation</a>
    </li>
  </ul>
</div>

{{-- header-end --}}
{{-- home-start --}}


  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner img-fluid">
        <div class="carousel-item active">
            <img src="{{asset('imge/pexels-louis-gys-12040995.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold"></h2>
                <h1 class="fw-bold"> </h1>
                <button class="btn rounded-pill" style="color: black; background-color:  rgb(217, 218, 235);; font-weight: bold"><span class="fw-bold">Explore More</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('imge/pexels-guillaume-meurice-2277420.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold"></h2>
                <h1 class="fw-bold"></h1>
                <button class="btn rounded-pill" style="color: black; background-color:  rgb(217, 218, 235); font-weight: bold"><span class="fw-bold">Learn More</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('imge/pexels-ryan-west-1719647.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold"></h2>
                <h1 class="fw-bold"></h1>
                <button class="btn rounded-pill" style="color: black; background-color: rgb(217, 218, 235); font-weight: bold"><span class="fw-bold">Explore the Range</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('imge/pexels-torsten-dettlaff-971522.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold"></h2>
                <h1 class="fw-bold"></h1>
                <button class="btn rounded-pill" style="color: black; background-color: rgb(217, 218, 235); font-weight: bold"><span class="fw-bold">Book Now</span></button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- home-end --}}
<div class="servi   " style="background-color: rgb(217, 218, 235); ">
  <div class="icon p-30 hover-zoom ">
      <img src="{{asset('imge/download-file-1-svgrepo-com.svg')}}" alt="" class="img1"><div>Download details</div>
      <a href=""></a>
  </div>
  <div class="icon p-30 hover-zoom">
      <img src="{{asset('imge/code-randd-search-svgrepo-com.svg')}}" alt="" class="img1 hover-zoom"><div>Find dealer</div>
      <a href=""></a>
  </div>
  <div class="icon p-30 hover-zoom">
      <img src="{{asset('imge/car-controller-part-svgrepo-com.svg')}}" alt="" class="img1 hover-zoom"><div>Book test Drive</div>
      <a href=""></a>
  </div>
  <div class="icon p-30 hover-zoom">
      <img src="{{asset('imge/code-randd-search-svgrepo-com.svg')}}" alt="" class="img1 hover-zoom"><div> Start configuration</div>
      <a href=""></a>
  </div>
</div>

<hr class="featurette-divider m-0 img-fluid ">

<div class="row p-0 m-0 featurette" style="background-color: rgb(217, 218, 235);">
  <div class="col-md-5 order-md-2 img-fluid ">
      <img src="{{asset('imge/pexels-deane-bayas-11960288.jpg')}}" alt="" class="img object-fit-cover w-100 h-100">
  </div>
  <div class="col-md-7 order-md-2 text-center ">
      <h2 class="featurette-heading fw-normal lh-1">Audi Q8 e-tron Experience the Augmented Reality</h2>
      <p class="lead">The high-voltage battery with a capacity of up to 114 kWh (gross) and a maximum range of up to 582 kilometres. When the battery state of charge is low, you can make use of additional range potential, for example by activating the Range mode⁸ in the MMI.</p>
  </div>
</div>


</div>

<div class="b-example-divider" ></div>


<div class="container">
  <footer class="py-5">
    <div class="row">




      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2023 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

</body>
</html>
