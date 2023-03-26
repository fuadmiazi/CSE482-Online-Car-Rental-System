<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="cars.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="img/logo1.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cars.php">Book Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fuad Hasan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="cars.php">Bookings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h2 class="heading">Choose Your Car</h2>
<div class="container-fluid d-flex justify-content-center">
  <div class="row mt-5">
    <div class="col-sm-4">
      <div class="card">
    <img src="img/background3.jpg" class="card-img-top" width="100%">
    <div class="card-body pt-0 px-0">
      <div class="d-flex flex-row justify-content-between mb-0 px-3">
        <small class="">Toyota Noah</small>
        <h6>&#2547;5000</h6>
      </div>
      <hr class="mt-2 mx-3">
      <div class="d-flex flex-row justify-content-between px-3 pb-4">
        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
        <div class="d-flex flex-column"><h5 class="mb-0">8.5/7.1</h5><small class="text-muted text-right">(city/Hwy)</small></div>
      </div>
      
      <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>Book Now</small></button></div>
    </div>
  </div>
  
    </div>
    <div class="col-sm-4">
      <div class="card">
    <img src="img/background7.jpg" class="card-img-top" width="100%">
    <div class="card-body pt-0 px-0">
      <div class="d-flex flex-row justify-content-between mb-0 px-3">
      <small class="">Toyota X Corolla</small>
        <h6>&#2547;2000</h6>
      </div>
      <hr class="mt-2 mx-3">
      <div class="d-flex flex-row justify-content-between px-3 pb-4">
        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
        <div class="d-flex flex-column"><h5 class="mb-0">8.5/7.1</h5><small class="text-muted text-right">(city/Hwy)</small></div>
      </div>
      
      <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>Book Now</small></button></div>
    </div>
  </div>
    </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="img/background8.jpg" class="card-img-top" width="100%">
    <div class="card-body pt-0 px-0">
      <div class="d-flex flex-row justify-content-between mb-0 px-3">
      <small class="">Toyota Prius</small>
        <h6>&#2547;3500</h6>
      </div>
      <hr class="mt-2 mx-3">
      <div class="d-flex flex-row justify-content-between px-3 pb-4">
        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
        <div class="d-flex flex-column"><h5 class="mb-0">8.5/7.1</h5><small class="text-muted text-right">(city/Hwy)</small></div>
      </div>
      
      <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>Book Now</small></button></div>
    </div>
  </div>
    </div>
  
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>