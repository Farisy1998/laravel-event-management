@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <center><h1>About Party Venue</h1></center>
            <hr>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <div class="alert alert-info" role="alert">
            Please fill this form to know about your party venue
        </div>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <form action="/party_venue_save" method="post">
            @csrf
            <br>
            <div class="from-group">
                <label><h6>Venue type</h6></label>
            </div>
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
            1. Normal - ₹ 800 per person. <br>
            2. Standard - ₹ 1800 per person. <br>
            3. VIP Decorated - ₹ 3800 per person. <br>
      </div>
    </div>
  </div>
                </div>
            </div>
            <p></p>
            <div class="form-group">
                <select class="form-select" name="venue_type" aria-label="Default select example" required>
                    <option value="">Select</option>
                    <option value="Normal">Normal</option>
                    <option value="Standard">Standard</option>
                    <option value="VIP Decorated">VIP Decorated</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Party Type</h6></label>
                <select class="form-select" name="party_type" aria-label="Default select example" required>
                    <option value="">Select</option>
                    <option value="Birthday party">Birthday party</option>
                    <option value="Christmas party">Christmas party</option>
                    <option value="Surprise party">Surprise party</option>
                    <option value="Dinner party">Dinner party</option>
                    <option value="Music party">Music party</option>
                    <option value="Dance party">Dance party</option>
                    <option value="Welcome party">Welcome party</option>
                    <option value="Farewell party">Farewell party</option>
                    <option value="Pre-party">Pre-party</option>
                    <option value="After-party">After-party</option>
                    <option value="Graduation party">Graduation party</option>

                </select>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Venue Style</h6></label>
                <select class="form-select" name="venue_style" aria-label="Default select example" required>
                    <option value="">Select</option>
                    <option value="Theatre Style">Theatre Style</option>
                    <option value="Boardroom Style">Boardroom Style</option>
                    <option value="U-shape Style">U-shape Style</option>
                    <option value="Wedding Style">Wedding Style</option>
                    <option value="Herringbone Style">Herringbone Style</option>
                    <option value="Hollow Square Style">Hollow Square Style</option>
                    <option value="Classroom Style">Classroom Style</option>
                    <option value="T-shape Style">T-shape Style</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Participants Number</h6></label>
                <input type="text" class="form-control" name="part_no" placeholder="Enter participants number" required>
            </div>
            <br>
            <button class="btn btn-success" type="submit">&nbsp;Submit&nbsp;</button>
            </form>
            <br>
            <br>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
</div>


@endsection