@extends('theme')
@section('content')

<div class="container">
<br>
<div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
    <center><h1>We Have Venues At</h1></center>
    <hr>
    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <center><button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Enquire Now</button></center>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
  <div class="offcanvas-header">
  <br>
    <h4 id="offcanvasTopLabel">Venues / Banquets</h4>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h5>Wedding Banquets</h5>
    <p></p>
      <img src="https://www.vedikadursheti.com/wp-content/uploads/2020/05/New-Indian-Muslim-Wedding-Cover-Pic.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <a href="/weddingbooking" class="btn btn-outline-light">Book Now</a>
      </div>
    </div>
    </div>
  </div>
  <hr>
  <br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h5>Party Venues</h5>
    <p></p>
      <img src="https://cdn.mos.cms.futurecdn.net/6d043f817df5b96f2849fa562bfdb202.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <a href="/partybooking" class="btn btn-outline-light">Book Now</a>
      </div>
    </div>
    </div>
  </div>
  <hr>
  <br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h5>Corporate Venues</h5>
      <img src="https://cfcdn-fc.cbstockreports.com/wp-content/uploads/sites/30/2021/04/default-conference.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <a href="/corporatebooking" class="btn btn-outline-light">Book Now</a>
      </div>
    </div>
    </div>
  </div>
  <hr>
  </div>
</div>
    </div>
</div>
<br>
<div class="row">
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="175px" src="https://i1.trekearth.com/photos/18313/20180202_093457.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>
  <p></p>
  <center><h5>Trivandrum</h5></center>
</div>
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static2.tripoto.com/media/filter/tst/img/382230/TripDocument/1495744480_varkala_beach65.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>
  <p></p>
  <center><h5>Calicut</h5></center>
      </div>
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/3b/12/9f/spice-harbour.jpg?w=900&h=-1&s=1" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>
  <p></p>
  <center><h5>Cochin</h5></center>
      </div>
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="170px" src="https://wallpapercave.com/wp/wp6733581.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>
  <p></p>
  <center><h5>Munnar</h5></center>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="170px" src="https://www.keralatourism.org/images/thalassery/static-banner/large/-17032020154205.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <p></p>
    <center><h5>Kannur</h5></center>
      </div>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="170px" src="https://images.luxuryescapes.com/lux-group/image/upload/q_auto:eco,c_fill,g_auto,ar_16:9/vfqvvrrfaxyce4trq1ci.jpeg" class="d-block w-100" alt="...">
    </div>
    </div>
    <p></p>
    <center><h5>Wayanad</h5></center>
      </div>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="170px" src="https://s1.1zoom.me/b5552/680/India_Rivers_Riverboat_Alappuzha_Kerala_Palms_527778_1920x1080.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <p></p>
    <center><h5>Aalappuzha</h5></center>
      </div>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="170px" src="https://thephotographersblog.com/wp-content/uploads/2016/11/Alleppey-07.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <p></p>
    <center><h5>Pathanamthitta</h5></center>
    <br>
    <br>
      </div>
    </div>
  </div>
</div>
@endsection