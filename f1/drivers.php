<?php require "koneksi/drivers/koneksi_drivers_10.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_1.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_2.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_3.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_4.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_5.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_6.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_7.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_8.php" ?>
<?php require "koneksi/drivers/koneksi_drivers_9.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylenavbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styledrivers.css">
</head>
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Competitions</li>
            <li class="breadcrumb-item active" aria-current="page">Drivers</li>
          </ol>
        </nav>
  </div>
    <section class="driver mt-3">
        <div class="container">
            <div class="section-title">
                <h2>Drivers</h2>
                <div class="underline"></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
            <div class="row">
                <?php foreach ($dataDriversSepuluh['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversSatu['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversDua['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversTiga['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversEmpat['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversLima['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversEnam['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversTujuh['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversDelapan['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach ($dataDriversSembilan['response'] as $row) {
                ?>
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="driverpic">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $row['name']; ?></h4>
                            <span><?php echo $row['abbr']; ?></span>
                            <p>Nationality: <?php echo $row['nationality']; ?></p>
                            <p>Birthdate: <?php echo $row['birthdate']; ?></p>
                            <p>Birthplace: <?php echo $row['birthplace']; ?></p>
                        <div class="buttondriver">
                            <button type="button" class="btn btn-outline-dark">View Detail<i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>