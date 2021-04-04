<?php
require('const.php');

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= $HOST; ?>gambar/icon.png" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $HOST; ?>library/css/bootstrap.min.css">
  <title>Penerbangan App</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">

      <a class="navbar-brand" href="#">Flight Route</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= $HOST; ?>">Daftar Rute</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= $HOST; ?>bandara.php">Daftar Bandara</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <h3 class="my-3">Daftar Bandara & Pajak</h3>
        
        <h4 class="mt-4 mb-2">Bandara Asal</h4>
        <table class="table table-striped rounded">
          <thead class="thead-dark">
            <th>No.</th>
            <th>Bandara</th>
            <th>Pajak</th>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($Airports[0] as $airport): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $airport[0]; ?></td>
              <td>Rp. <?= $airport[1]; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      
        <h4 class="mt-5 mb-2">Bandara Tujuan</h4>
        <table class="table table-striped rounded">
          <thead class="thead-dark">
            <th>No.</th>
            <th>Bandara</th>
            <th>Pakjak</th>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($Airports[1] as $airport): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $airport[0]; ?></td>
              <td>Rp. <?= $airport[1]; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      
      </div>
    </div>
</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?= $HOST; ?>library/js/jquery_3.6.0.js"></script>
    <script src="<?= $HOST; ?>library/js/bootstrap.bundle.min.js"></script>
  </body>
</html>