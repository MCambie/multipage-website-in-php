<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="site potage-toit" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fdfdfd" />
  <title>Potage-Toit</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- favicon -->
  <link rel="icon" type="image/png" href="/images/favicon.png">
</head>

<body>
  <section class="menu">
    <nav class="navbar  navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">
        <img class="logo" src="assets/images/logo_potage-toit_opt.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active text-white">
            <a class="nav-link text-white" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="pages/exper.php">Vos expériences</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="pages/new.php">News</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="pages/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <!-- Carroussel  -->
  <section class="carroussel jumbotron-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/IMG_2046-1000x220.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/IMG_2475-1000x220.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/IMG_2507-1000x220.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/IMG_25301-1000x220.jpg" alt="Third slide">
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
    </div>
  </section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
