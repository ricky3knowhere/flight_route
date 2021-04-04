<?php
require('const.php');
session_start();

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
          <li class="nav-item active">
            <a class="nav-link" href="<?= $HOST; ?>">Daftar Rute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $HOST; ?>bandara.php">Daftar Bandara</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col">
        <h3 class="my-3">Daftar Rute Tersedia</h3>
        <button type="button" class="btn btn-danger badge-pill my-3" data-toggle="modal" data-target="#staticBackdrop">
          Tambah Rute
        </button>
        
        <?php if (isset($_SESSION['notif'])) : ?>
        <div class="row">
          <div class="col-md-5">
            
        <div class="alert alert-success">
          Data berhasil ditambahkan...
        </div>
          </div>
        </div>
      
        <?php 
        session_unset();
        endif; ?>
        
          <div class="table-responsive">      

        <table class="table table-striped">
          <thead class="thead-dark" >
            <tr>
             
            <th>No.</th>
            <th>Maskapai</th>
            <th>Asal Penerbangan</th>
            <th>Tujuan Penerbangan</th>
            <th>Harga Tiket</th>
            <th>Pajak</th>
            <th>Total Harga Tiket</th>
           </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($Flights as $flight): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $flight[0]; ?></td>
              <td><?= $flight[1]; ?></td>
              <td><?= $flight[2]; ?></td>
              <td>Rp. <?= $flight[3]; ?></td>
              <td>Rp. <?= $flight[4]; ?></td>
              <td>Rp. <?= $flight[5]; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>

    <!-- Form Rute Penerbangan -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered rounded">
        <div class="modal-content rounded">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Rute</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span> </button>
          </div>

          <div class="modal-body">
            <form action="save.php" method="post">
              <div class="form-group">
                <label for="airlines">Maskapai</label>
                <input class="form-control" id="airlines" name="airlines" required>
              </div>

              <div class="form-group">
                <label for="origin">Asal Penerbangan</label>
                <select class="form-control" id="origin" name="origin">
                  <?php
                  $orNum = 0;
                  foreach ($Airports[0] as $origin): ?>
                  <option value="<?= $orNum++; ?>"><?= $origin[0]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="destination">Tujuan Penerbangan</label>
                <select class="form-control" id="destination" name="destination">
                  <?php
                  $desNum = 0;
                  foreach ($Airports[1] as $destination): ?>
                  <option value="<?= $desNum++; ?>"><?= $destination[0]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="price">Harga Tiket</label>
                <input type="number" class="form-control" id="price" name="price" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark badge-pill" data-dismiss="modal">Cancle</button>
              <button type="submit" class="btn btn-danger badge-pill" name="submit">Save</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    
  </div>
</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?= $HOST; ?>library/js/jquery_3.6.0.js"></script>
    <script src="<?= $HOST; ?>library/js/bootstrap.bundle.min.js"></script>
 
  </body>
</html>