@extends('admin_theme')
@section('admin_content')
<nav class="navbar navbar-light bg-danger">
  <div class="container-fluid">
   <br>
  </div>
</nav>
<nav class="navbar navbar-light bg-danger">
  <div class="container-fluid">
   <h1><font color="white">Admin Dashboard</font></h1>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <br>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"><h4>Users</h4></div>
  <div class="card-body">
    <h5 class="card-title">Registered users and messages</h5>
    <br>
    <button class="btn btn-outline-light">Show</button>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <br>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header"><h4>Venues and Events</h4></div>
  <div class="card-body">
    <h5 class="card-title">Booked Events and Venues by the user</h5>
    <br>
    <button class="btn btn-outline-light">Show</button>
  </div>
</div>
        </div>
        
    </div>
</div>

@endsection