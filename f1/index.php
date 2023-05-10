<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylenavbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
.navbar-toggler {  
    background: red;
}
.section-padding {
	padding: 100px 0;
}
.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	bottom: 220px;
	z-index: 2;
}
.carousel-caption h5 {
	font-size: 40px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 17px;
	line-height: 1.9;
}
.carousel-caption p a{
    background-color: white;
    color: black;
}
.carousel-caption p a:hover{
    background-color: red;
    color: black;
    font-weight: 500;
}
.carousel-inner:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.7);
	z-index: 1;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.carousel-caption {
		bottom: 370px;
	}
	.carousel-caption p {
		width: 100%;
	}
	.img-area img {
		width: 100%;
	}
  .single-box {
		margin-bottom: 50px;
	}
}
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
	}
	.carousel-caption {
		bottom: 270px;
	}
	.carousel-caption h5 {
		font-size: 16px;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
	.carousel-caption p {
		width: 100%;
		line-height: 1.6;
		font-size: 12px;
	}
  .single-box {
		margin-bottom: 50px;
	}
}

</style>
<body>
    <nav class="navbar navbar-expand-lg fw-normal fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" width="60" height="55">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Competitions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="circuits.php">Circuits</a></li>
                            <li><a class="dropdown-item" href="drivers.php">Drivers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Rankings
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ranking-teams.php">Teams</a></li>
                            <li><a class="dropdown-item" href="ranking-drivers.php">Drivers</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/gambar5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Lorem ipsum dolor sit amet</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-outline-dark mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/gambar4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Lorem ipsum dolor sit amet</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-outline-dark mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/gambar1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Lorem ipsum dolor sit amet</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-outline-dark mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <img src="assets/logo.png" alt="" style="width: 110px; height: 90px;">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus sunt praesentium aspernatur iure molestias.</p>
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <div class="card-area">
                            <i class="fa fa-cc-visa"></i>
                            <i class="fa fa-credit-card"></i>
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-paypal"></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Competitions</h2>
                    <ul>
                        <li><a href="circuits.php">Circuits</a></li>
                        <li><a href="drivers.php">Drivers</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Races</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Rankings</h2>
                    <ul>
                        <li><a href="ranking-teams.php">Teams</a></li>
                        <li><a href="ranking-drivers.php">Drivers</a></li>
                        <li><a href="#">Races</a></li>
                        <li><a href="#">Starting Grid</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Newsletter</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloremque earum similique fugiat nobis. Facere?</p>
                        <h2>Follow us on</h2>
                        <p class="socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-dribbble"></i>
                            <i class="fa fa-pinterest"></i>
                            <i class="fa fa-twitter"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>