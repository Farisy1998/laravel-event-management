@extends('theme')
@section('content')

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }
        .container{
            display:grid;
            height:100%;
            place-items:center;
        }
        label{
            position:relative;
            height:180px;
            width:180px;
            display:inline-block;
            border:3px solid rgba(0,0,0,0.2);
            border-radius:50%;
            border-color:#5cb85c;

        }
        label .check-icon{

        }
        label .check-icon:after{
            position:absolute;
            content:"";
            top:75px;
            left:89px;
            transform:translate(-50%, -50%) scaleX(-1) rotate(135deg);
            height:60px;
            width:28px;
            border-top:4px solid #5cb85c;
            border-right:4px solid #5cb85c;

        }
    </style>


<div class="container">
<br>
<br>
    <label>
        <di class="check-icon">

        </di>
    </label>
    <br>
    <h1>Thank You</h1>
    <h5>Payment hasbeen successful</h5>
    <br>
    <br>
    <a href="/userhome" type="Submit" class="btn btn-primary btn-lg">&nbsp; Go to Home &nbsp;</a>

</div>

@endsection