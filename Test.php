<?php

$HOST = 'http://localhost:8080/flight_route/';
$i = 1;
$data = file_get_contents('data/data.json');
$flights = json_decode($data);

$airport_list = file_get_contents('data/airport.json');
$airports = json_decode($airport_list);


?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $HOST; ?>library/css/bootstrap.css">
  <title>Penerbangan App</title>
</head>
<body>
  <!-- Button trigger modal --> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Launch demo modal </button> <!-- Modal --> <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-danger"
    data-toggle="modal" data-target="#staticBackdrop">
    Daftar Rute Penerbangan
  </button>

  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Form Rute Penerbangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="airlines">Maskapai</label>
              <input class="form-control" id="airlines" name="airlines">
            </div>

            <div class="form-group">
              <label for="origin">Asal Penerbangan</label>
              <select class="form-control" id="origin" name="origin">
                <?php foreach ($airports['origin'] as $origin): ?>
                <option value="<?= $origin[0]; ?>"><?= $origin[0]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="destination">Tujuan Penerbangan</label>
              <select class="form-control" id="destination" name="destination">
                <?php foreach ($airports['destination'] as $destination): ?>
                <option value="<?= $destination[0]; ?>"><?= $destination[0]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="price">Harga Tiket</label>
              <input class="form-control" id="price">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cancle</button>
          <button type="button" class="btn btn-danger">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="<?= $HOST; ?>library/js/jquery-3.3.1.js"></script>
  <script src="<?= $HOST; ?>library/js/bootstrap.min.js"></script>
  <script>
    alert('ok')
    $('.btn').onclik(() => alert('ok'))
  </script>
</body>
</html>