@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <br>
            <br>
            <center><h1>Venue / Banquet Booking</h1></center>
            <hr>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="alert alert-info" role="alert">
                Please fill this form to book your Venue / Banquet
            </div>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <form action="/banquet_booking_save" method="post">
            @csrf
            <br>
            <div class="form-group">
                <label><h6>First name</h6></label>
                <input type="text" name="fname" placeholder="Enter requester's first name" class="form-control" value="{{$LoggedUserInfo['fname']}}">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Last name</h6></label>
                <input type="text" name="lname" placeholder="Enter requester's last name" class="form-control" value="{{$LoggedUserInfo['lname']}}">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Email</h6></label>
                <input type="text" name="email" placeholder="Enter requester's email" class="form-control" value="{{$LoggedUserInfo['email']}}">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Mobile no:</h6></label>
                <input type="text" name="mob" placeholder="Enter requester's mobile no:" class="form-control" value="{{$LoggedUserInfo['phoneno']}}">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Alternate mobile  no:</h6></label>
                <input type="text" name="alt_mob" placeholder="Enter requester's alternate mobile no:" class="form-control">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>What you want to book</h6></label>
                <select name="book_type" class="form-select" required>
                    <option disabled selected>Select</option>
                    <option value="Wedding banquet">Wedding banquet</option>
                    <option value="Party venue">Party venue</option>
                    <option value="Corporate venue">Corporate venue</option>
                </select>
                <span class="text-danger">@error('book_type'){{$message}} @enderror</span>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h4><u>Venue / Banquet duration:</u></h4></label>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>From</h6></label>
                <input type="date" name="from_date" class="form-control" required>
                <span class="text-danger">@error('from_date'){{$message}} @enderror</span>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>To</h6></label>
                <input type="date" name="to_date" class="form-control" required>
                <span class="text-danger">@error('to_date'){{$message}} @enderror</span>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h6>Venue / Banquet location</h6></label>
                <select class="form-select" name="location" aria-label="Default select example" required>
                    <option value="Select">Select</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Calicut">Calicut</option>
                    <option value="Cochin">Cochin</option>
                    <option value="Munnar">Munnar</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Wayanad">Wayanad</option>
                    <option value="Aalappuzha">Aalappuzha</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                </select>
                <span class="text-danger">@error('location'){{$message}} @enderror</span>
            </div>
            <br>
            <br>
            <a href="/venues" class="btn btn-primary">Cancel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn btn-success" type="submit">&nbsp;Next&nbsp;</button>
            </form>
            <br>
            <br>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
</div>


@endsection