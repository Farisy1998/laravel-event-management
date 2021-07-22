@extends('theme')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <center><h3>Make Registration Fee Payment</h3></center>
            <br>
            <br>
            <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <font color="white"><h5>Online Payment</h5></font>
  </div>
</nav>
<br>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <form action="/reg_payment_save" method="post">
            @csrf
                <div class="form-group">
                    <label><h6>Name on card</h6></label>
                    <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Name" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>Card number</h6></label>
                    <input type="text-number" name="card_no" autocomplete="off" class="form-control card-number" placeholder="Card number" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>CVC</h6></label>
                    <input type="text" name="cvc" placeholder="CVC" autocomplete='off' required class="form-control card-cvc">
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>Expiration</h6></label>
                    <input type="text" class="form-control card-expiry-month" name="exp_month" placeholder="MM" required>
                    <p></p>
                    <input type="text" class="form-control  card-expiry-year" name="exp_year" placeholder="YY" required>
                </div>
                <br>
                <div class="d-grid gap-2">
  <button class="btn btn-primary btn-lg" type="submit">Pay &nbsp; ₹ 250</button>
</div>
            </form>
            <br>
            <br>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
</div>

@endsection