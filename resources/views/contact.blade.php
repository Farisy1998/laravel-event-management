@extends('theme')
@section('content')

<div class="container">
<br>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <center><font><h1>Have a Query ?</h1></font></center>
            <hr>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://aeroleads.com/blog/wp-content/uploads/2018/03/contact-us-banner.jpg" alt="..."  class="d-block w-100">
    </div></div></div>
        <p></p>
        <div class="form-group">
            <label><h6>For any queries please drop in an email to:</h6>presentupeventteam@gmail.com</label>
        </div>
        <br>
        <div class="form-group">
            <label><h6>Corporate Office Address:</h6>TOG Pass road, Glass factory junction,<p>Kalamasseri P.O, Ernakulam, PIN: 682021</p></label>
        </div>
        <div class="form-group">
            <label><h6>Contact:</h6>+91 9947441869</label>
        </div>
        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <br>
        <nav class="navbar navbar-light bg-primary">
  <div class="container-fluid">
  <br>
    <font color="white"><h2>Enquire Here</h2></font>
    <div class="form-group"></div>
  </div>
</nav>
        <br>
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif
        <form action="/enquire_save" method="post">
        @csrf
        <div class="form-group">
            <label><h6>Your name:</h6></label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
        </div>
        <p></p>
        <div class="form-group">
            <label><h6>Your email:</h6></label>
            <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <p></p>
        <div class="form-group">
            <label><h6>Your phone number:</h6></label>
            <input type="text" name="phone_no" class="form-control" placeholder="Enter your phone number" required>
        </div>
        <p></p>
        <div class="form-group">
            <label><h6>Your city:</h6></label>
            <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
        </div>
        <p></p>
        <div class="form-group">
            <label><h6>Your message:</h6></label>
            <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Enter your message" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </div>
    <br>
    <br>
</div>

@endsection