<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentup</title>
    <link rel = "icon" href ="https://www.snapshot-booths.com/wp-content/uploads/2018/10/cropped-favicon-logo.png" type = "imagex-icon">
    <style>
      .btn-primary:hover{
        opacity: .7;
      }
      .btn-danger:hover{
        opacity: .7;
      }.btn-success:hover{
        opacity: .7;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="/userhome"><img src="https://presentup.themetechmount.com/themeselector/wp-content/uploads/sites/2/2018/10/logo.png" height="99px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/userhome"><h5><font color="white">Home</font></h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/venues"><h5><font color="white">Venues</font></h5></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h5><font color="white">Booking</font></h5>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/venues">Venues</a></li>
            <li><a class="dropdown-item" href="/photoshoot">photoshoot</a></li>
            <li><a class="dropdown-item" href="/makeup">Makeup</a></li>
            <li><a class="dropdown-item" href="/mehendi">Mehendi</a></li>
            <li><a class="dropdown-item" href="/decorations">Decorations</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about"><h5><font color="white">About</font></h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact"><h5><font color="white">Contact</font></h5></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h5><font color="white">Account</font></h5>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/mybooking/1">My Bookings</a></li>
            <li><a class="dropdown-item" href="/profile/1">Profile</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="/search" method="get">
        <input name="search_data" class="form-control me-2" type="search" placeholder="Search for page" aria-label="Search" required>
        <button class="btn btn-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    @yield('content')
</body>
</html>