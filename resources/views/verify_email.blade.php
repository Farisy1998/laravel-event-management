<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email | Presentup</title>
    <link rel = "icon" href ="https://www.snapshot-booths.com/wp-content/uploads/2018/10/cropped-favicon-logo.png" type = "imagex-icon">
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
        .container form .btn-primary{
            transform: translateX(70%);
            width: 30%;
            height: 40px;
            border: 0;
            background: #0066ff;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn-primary:hover{
            opacity: .7;
            background: #0066ff;
        }
        .container form .btn-danger{
            transform: translateX(55%);
            width: 30%;
            height: 40px;
            border: 0;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn-danger:hover{
            opacity: .7;
            background: #ff3333;
        }
    </style>
</head>
<body>
            <div class="container">
            <br>
            <br>
            <center><font color="white"><h1>Presentup Event Team</h1></font></center>
            <br>
                <form action="/emailcheck" method="get">
                <h2>Verify Your Email</h2>
                @csrf
                    <div class="alert alert-warning" role="alert">
                        Enter the email address that you have given at the time of account creation on Presentup.
                    </div>
                    <br>
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{{Session::get('fail')}}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label><h5>Email</h5></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}  @enderror</span>
                    </div>
                    <br>
                        <a class="btn btn-danger" href="/">Cancel</a>&nbsp;<button class="btn btn-primary" type="submit">Next</button>
                        <br>
                        <br>
                </form>
                <br>
                <br>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>