<?php require "koneksi/circuits/koneksi_circuit_albert.php"; ?>
<?php require "koneksi/circuits/koneksi_circuit_bahrain.php"; ?>
<?php require "koneksi/circuits/koneksi_circuit_hanoi.php"; ?>
<?php require "koneksi/circuits/koneksi_circuit_shanghai.php"; ?>
<?php require "koneksi/circuits/koneksi_circuit_zandvoort.php"?>
<?php require "koneksi/circuits/koneksi_circuit_catalunya.php"?>
<?php require "koneksi/circuits/koneksi_circuit_monaco.php" ?>
<?php require "koneksi/circuits/koneksi_circuit_baku.php" ?>
<?php require "koneksi/circuits/koneksi_circuit_kanada.php" ?>
<?php require "koneksi/circuits/koneksi_circuit_perancis.php" ?>
<?php require "koneksi/circuits/koneksi_circuit_austria.php" ?>
<?php require "koneksi/circuits/koneksi_circuit_silverstone.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylenavbar.css">
<style>
    .p{
        text-align: justify;
    }
    .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .navbar-toggler{
        background-color: red;
    }
    .section-title{
      text-align: center;
      padding-bottom: 30px;
  }
  
  .section-title h2{
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      padding-bottom: 20px;
      position: relative;
      text-transform: uppercase;
  }
  
  .section-title p{
      margin-top: 20px;
  }
  
  .underline{
      width: 150px;
      height: 2px;
      background-color: black;
      margin: auto;
      margin-top: -30px;
  
  }
    .image{
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .image:hover{
        opacity: 0.3;
    }
    .overlay:hover{
        opacity: 1;
    }
    .fw-semibold{
        color: white;
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
    <div class="container">
      <br>
        <br>
        <br>
        <br>
        <br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Competitions</li>
              <li class="breadcrumb-item active" aria-current="page">Circuits</li>
            </ol>
          </nav>
          <br>
          <br>
    </div>
    <div class="container-fluid">
          <div class="section-title">
            <h2>Circuits</h2>
            <div class="underline"></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 my-4">

            <?php foreach ($dataIdSatu['response'] as $row) {
            ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $row['image']; ?>" class="image card-img-top mt-3 " alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                  <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                </div>
              </div>
            </div>
            <?php }?>

            <?php foreach ($dataIdDua['response'] as $row) {
            ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                  <!-- <p class="card-text p">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                </div>
              </div>
            </div>
            <?php }?>

            <?php foreach ($dataIdTiga['response'] as $row) {
            ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                  <!-- <p class="card-text p">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                </div>
              </div>
            </div>
            <?php }?>

            <?php foreach ($dataIdEmpat['response'] as $row) {
            ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                  <!-- <p class="card-text p">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                </div>
              </div>
            </div>
            <?php }?>

            <?php foreach ($dataIdLima['response'] as $row) {
            ?>
            <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdEnam['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdTujuh['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdDelapan['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdSembilan['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdSepuluh['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdSebelas['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>

              <?php foreach ($dataIdDuabelas['response'] as $row) {
              ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $row['image']; ?>" class="image card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <button type="button" class="btn btn-outline-dark overlay">View Details</button>
                  </div>
                </div>
              </div>
              <?php }?>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>