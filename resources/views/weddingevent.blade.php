@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <center><h1>Event Booking</h1></center>
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
        <form action="/reg_payment" method="get">
        @csrf
        <br>
            <div class="form-group">
                <label><h6>Event starts</h6></label>
                <input type="date" name="start_date" class="form-control" required><p></p>
                <input type="time" name="start_time" class="form-control" placeholder="" required>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Event ends</h6></label>
                <input type="date" name="end_date" class="form-control" required><p></p>
                <input type="time" name="end_time" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label><h6>Participants no:</h6></label>
                <input type="text" class="form-control" name="partno" placeholder="Enter participants no:" required>
            </div>
            <br>
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