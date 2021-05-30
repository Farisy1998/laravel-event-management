<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Presentup</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            min-height: 100hv;
            background: url("https://slataiweshpsb.files.wordpress.com/2014/02/a-group-of-colorful-and-glowing-flowers-flying-on-purple-background-is-indeed-good-looking-and-easy-to-apply-widescreen-flowery-background.jpg");
            display: flex;
            font-family: sans-serif;
        }
        .container{
            margin: auto;
            width: 500px;
            max-width: 90%;
        }
        .h1{
            text-align: center;
            margin-bottom: 24px;
        }
        .container form{
            width: 100%;
            height: 100%;
            padding: 20px;
            background: white;
            border-radius: 4px;
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
        .container form .btn{
            margin-left: 50%;
            transform: translateX(-50%);
            width: 45%;
            height: 40px;
            border: 0;
            background: #0066ff;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn:hover{
            opacity: .7;
            background: #0066ff;
        }
    </style>
</head>
<body>
            <div class="container">
            <br>
            <br>
            <center><font color="white"><h1>Presentup Event Team</h1></font></center>
            <br>
                <form action="/logincheck" method="post">
                <h2>Sign In</h2>
                @csrf
                    <div class="alert alert-warning" role="alert">
                        I don't have an account&nbsp;&nbsp;<a href="/register">Sign Up</a>
                    </div>
                    <br>
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{{Session::get('fail')}}}
                    </div>
                    @endif
                    <div class="form-group">
                        <select class="form-select" name="acctype" aria-label="Default select example" required>
                            <option selected>Account type</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                        <span class="text-danger">@error('acctype'){{$message}}  @enderror</span>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Username</h5></label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{old('username')}}">
                        <span class="text-danger">@error('username'){{$message}}  @enderror</span>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label><h5>Password</h5></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{$message}}  @enderror</span>
                    </div>
                    <br>
                        <button class="btn btn-outline-primary" type="submit">Login</button>
                        <br>
                        <br>
                        <a href="/admin_reg">Admin Registration</a>
                </form>
                <br>
                <br>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>