@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <center><h1>Wedding Event Booking</h1></center>
            <hr>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <div class="alert alert-info" role="alert">
            Please fill this form to book your wedding event
        </div>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
        <form action="/wedding_event_save" method="post">
        @csrf
        <br>
            <div class="form-group">
                <label><h6>Wedding starts</h6></label>
                <input type="date" name="start_date" class="form-control" required>
                <span class="text-danger">@error('start_date'){{$message}} @enderror</span>
                <p></p>
                <input type="time" name="start_time" class="form-control" placeholder="" required>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Wedding ends</h6></label>
                <input type="date" name="end_date" class="form-control" required>
                <span class="text-danger">@error('end_date'){{$message}} @enderror</span>
                <p></p>
                <input type="time" name="end_time" class="form-control" required>
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
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Non - Vegitarian</h6></label>
                <select class="form-select" name="non_veg" aria-label="Default select example" required>
                <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Vegitarian + IMFL (Indian Made Foreign Liquor)</h6></label>
                <select class="form-select" name="veg_imfl" aria-label="Default select example" required>
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Non - Vegitarian + IMFL (Indian Made Foreign Liquor)</h6></label>
                <select class="form-select" name="non_veg_imfl" aria-label="Default select example" required>
                    <option disabled selected>Select</option>>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>External liquor</h6></label>
                <select class="form-select" name="ex_liquor" aria-label="Default select example" required>
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>External cool drinks</h6></label>
                <select class="form-select" name="ex_cool_drinks" aria-label="Default select example" required>
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label><h6>Audio and visual</h6></label>
                <select class="form-select" name="audio_visual" aria-label="Default select example" required>
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Live casting</h6></label>
                <select class="form-select" name="live_casting" aria-label="Default select example" required>
                    <option disabled selected>Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <p></p>
            <div class="form-group">
                <label><h6>Additional message</h6></label>
                <textarea name="message"cols="30" rows="10" class="form-control" placeholder="Type your message or additional informations"></textarea>
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