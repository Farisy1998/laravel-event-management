@extends('theme')
@section('content')
<head>
    <style>
      body{
    font-family: sans-serif;
    color: #3c3939;
    background-color: #f1f1f1;
    }
    .container{
    width: 350px;
    border-radius: 4px;
    margin: auto;
    background: #fff;
    box-shadow: 0 8px 16px rgba(0,0,0,.3);
    }
    .container form h2{
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }
    .container form .form-control{
            width: 100%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid silver;
            margin: 10px 0 10px 0;
            padding: 0 10px;
    }
    .container form .btn.btn-danger{
            margin-left: 25%;
            transform: translateX(-50%);
            width: 30%;
            height: 40px;
            border: 0;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn.btn-danger:hover{
            opacity: .7;
            background: #ff3333;
        }
        .container form .btn.btn-success{
            transform: translateX(-50%);
            width: 30%;
            height: 40px;
            border: 0;
            cursor: pointer;
            font-size: 18px;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn.btn-success:hover{
            opacity: .7;
            background: #009933;
        }
    </style>
</head>
<br>
<br>
<div class="container">
    <br>
    <form action="/update_password/{{$data->id}}">
        <h2>Change Your Password</h2>
        @csrf
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{{Session::get('success')}}}&nbsp;&nbsp;<a href="/profile/1">Go to profile</a>
        </div>
        @endif
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{{Session::get('fail')}}}
        </div>
        @endif
        <div class="form-group">
            <label><h5>New password</h5></label>
            <input type="password" class="form-control" name="password" placeholder="Enter new password">
            <span class="text-danger">@error('password'){{$message}}  @enderror</span>
        </div>
        <p></p>
        <div class="form-group">
            <label><h5>Confirm password</h5></label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Re-enter new password">
            <span class="text-danger">@error('confirm_password'){{$message}}  @enderror</span>
        </div>
        <br>
        <a class="btn btn-danger" href="/profile/{{$data->id}}">Cancel</a>&nbsp;&nbsp;&nbsp;<button class="btn btn-success" type="submit">Save</button>
        <br>
        <br>
    </form>
</div>
<br>
<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
@endsection