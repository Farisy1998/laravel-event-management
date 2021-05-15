@extends('theme')
@section('content')
<br>
<br>
    <div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <center><h2><font>My Profile</font></h2></center>
        <br>
            <table class="table table-dark table-hover">
                <tr>
                    <td>Name</td>
                    <td>{{$LoggedUserInfo['fname']}} {{$LoggedUserInfo['lname']}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$LoggedUserInfo['email']}}</td>
                </tr>
                <tr>
                    <td>Phone no:</td>
                    <td>{{$LoggedUserInfo['phoneno']}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{$LoggedUserInfo['username']}}</td>
                </tr>
            </table>
            </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6"></div>
    </div>
@endsection