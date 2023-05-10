<?php require "koneksi/klasemen/koneksi_klasemen_drivers.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylenavbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
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
    
    .section-title h5{
        font-size: 20px;
        margin-top: 20px;
    }
    
    .underline{
        width: 150px;
        height: 2px;
        background-color: black;
        margin: auto;
        margin-top: -30px;
    
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg fw-normal">
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
    <br>
    <div class="container-fluid mt-5">
        <div class="section-title">
          <h2>Klasemen Drivers</h2>
          <div class="underline"></div>
          <h5>Formula &nbsp;1 &nbsp; Championship 2022</h5>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Positions</th>
                <th scope="col">Drivers</th>
                <th scope="col">Teams</th>
                <th scope="col">Points</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($dataRankingsDrivers['response'] as $rows ){
                ?>
              <tr>
                <th scope="row"><?php echo $rows['position']; ?></th>
                <td><?php echo $rows['driver'] ['name']; ?> (<?php echo $rows['driver'] ['abbr']; ?>) &nbsp <?php echo $rows['driver'] ['number']; ?></td>
                <td><?php echo $rows['team'] ['name']; ?> </td>
                <td><?php echo $rows['points']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>