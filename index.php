<?php

$HOST = 'http://localhost:8080/flight_route/';
$i = 1;
$data = file_get_contents('data/data.json');
$flights = json_decode($data);

$airport_list = file_get_contents('data/airport.json');
$airports = json_decode($airport_list);

var_dump($_POST)
?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $HOST; ?>library/css/bootstrap.min.css">
  <title>Penerbangan App</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">

      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Maskapai</a>
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

        <table class="table table-striped rounded">
          <thead class="thead-dark">
            <th>No.</th>
            <th>Maskapai</th>
            <th>Asal Penerbangan</th>
            <th>Tujuan Penerbangan</th>
            <th>Harga Tiket</th>
            <th>Pajak</th>
            <th>Total Harga Pajak</th>
          </thead>
          <tbody>
            <?php 
            foreach ($flights as $flight): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $flight[0]; ?></td>
              <td><?= $flight[1]; ?></td>
              <td><?= $flight[2]; ?></td>
              <td><?= $flight[3]; ?></td>
              <td><?= $flight[4]; ?></td>
              <td><?= $flight[5]; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Form Rute Penerbangan --> 
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered rounded">
        <div class="modal-content rounded">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span> </button>
          </div>
          
          <div class="modal-body">
          <form action="index.php" method="post">
            <div class="form-group">
              <label for="airlines">Maskapai</label>
              <input class="form-control" id="airlines" name="airlines">
            </div>

            <div class="form-group">
              <label for="origin">Asal Penerbangan</label>
              <select class="form-control" id="origin" name="origin">
                <?php 
                foreach ($airports[0] as $origin): ?>
                <option value="<?= $origin[0]; ?>"><?= $origin[0]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="destination">Tujuan Penerbangan</label>
              <select class="form-control" id="destination" name="destination">
                <?php foreach ($airports[1] as $destination): ?>
                <option value="<?= $destination[0]; ?>"><?= $destination[0]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="price">Harga Tiket</label>
              <input class="form-control" id="price">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark badge-pill" data-dismiss="modal">Cancle</button>
          <button type="submit" class="btn btn-danger badge-pill">Save</button>
        </div>
          </form>
           
      </div>
    </div>
  </div>


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="<?= $HOST; ?>library/js/jquery_3.6.0.js"></script>
  <script src="<?= $HOST; ?>library/js/bootstrap.bundle.min.js"></script>
</body>
</html>