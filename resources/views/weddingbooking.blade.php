@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <br>
            <br>
            <center><h1>Wedding Banquet Booking</h1></center>
            <hr>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="alert alert-info" role="alert">
                Please fill this form to book your wedding banquet
            </div>
            <form action="/weddingevent" method="get">
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
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Mobile no:</h6></label>
                <input type="text" name="mob" placeholder="Enter requester's mobile no:" class="form-control" value="{{$LoggedUserInfo['phoneno']}}">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Alternate mobile  no:</h6></label>
                <input type="text" name="altmob" placeholder="Enter requester's alternate mobile no:" class="form-control" required>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h4><u>Banquet duration:</u></h4></label>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>From</h6></label>
                <input type="date" name="bfrom" class="form-control">
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>To</h6></label>
                <input type="date" name="bto" class="form-control">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h6>Banquet location</h6></label>
                <select class="form-select" name="blocation" aria-label="Default select example" required>
                    <option selected>Select banquet</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Calicut">Calicut</option>
                    <option value="Cochin">Cochin</option>
                    <option value="Munnar">Munnar</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Wayanad">Wayanad</option>
                    <option value="Aalappuzha">Aalappuzha</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                </select>
            </div>
            <p></p>
            <div class="from-group">
                <label><h6>Banquet type</h6></label>
            </div>
            <p></p>
            <div class="form-group">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <strong>&nbsp; ! Note</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            1. Normal - 1000 per person. <br>
            2. Standard - 2000 per person. <br>
            3. VIP - 3500 per person. <br>
      </div>
    </div>
  </div>
                </div>
            </div>
            <p></p>
            <div class="form-group">
                <select class="form-select" name="btype" aria-label="Default select example" required>
                    <option selected>Select banquet type</option>
                    <option value="Normal">Normal</option>
                    <option value="Standard">Standard</option>
                    <option value="VIP Standard">VIP</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h4><u>Food:</u></h4></label>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Vegitarian</h6></label>
                <select class="form-select" name="veg" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Non - Vegitarian</h6></label>
                <select class="form-select" name="non_veg" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Vegitarian + IMFL (Indian Made Foreign Liquor</h6></label>
                <select class="form-select" name="veg_imfl" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Non - Vegitarian + IMFL (Indian Made Foreign Liquor)</h6></label>
                <select class="form-select" name="non_veg_imfl" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>External liquor</h6></label>
                <select class="form-select" name="ex_liquor" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>External cool drinks</h6></label>
                <select class="form-select" name="ex_cooldrinks" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h6>Audio and visual</h6></label>
                <select class="form-select" name="audio_visual" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Live casting</h6></label>
                <select class="form-select" name="live_cast" aria-label="Default select example" required>
                    <option selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Add message</h6></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Type your message or additional informations"></textarea>
            </div>
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