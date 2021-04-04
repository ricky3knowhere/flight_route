<?php
require('const.php');

//Memulai session
session_start();

// Fungsi Tambah Data
function add_data($Flights, $Airports, $newData) {

  // Mengambil data bandara
  $orNum = $newData['origin'];
  $desNum = $newData['destination'];

  // Menghitung Pajak
  $orTax = $Airports[0][$orNum][1];
  $desTax = $Airports[1][$desNum][1];
  $sumTax = $orTax + $desTax;

  // Menghitung harga tiket
  $totalPrice = $newData['price'] + $sumTax;

  // Menambah data baru pada array
  $flight_data = $Flights;

  $flight_data[] = [
    $newData['airlines'],
    $Airports[0][$orNum][0],
    $Airports[1][$desNum][0],
    $newData['price'],
    $sumTax,
    $totalPrice
  ];
  
  // Mengurutkan data array
  sort($flight_data);
  
  // Memasukan array pada file data.json
  $data = json_encode($flight_data);

  file_put_contents('data/data.json', $data);

}

// Mengecek apakah ada data yang dikirim
if (isset($_POST['submit'])) {
  
  // Menjalankan fungsi tambah data
  add_data($Flights, $Airports, $_POST);
}

// Membuat session notifikasi
  $_SESSION['notif'] = 'Data Berhasil Ditambahkan';

// Mengalihkan ke halaman utama
  header('Location:'.$HOST);
?>