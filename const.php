<?php
$HOST = 'http://localhost:8080/flight_route/';
$DATA = file_get_contents('data/data.json');
$AIRPORT_LIST = file_get_contents('data/airport.json');

// Data Rute Penerbangan
$Flights = json_decode($DATA);

// Data  Bandara
$Airports = json_decode($AIRPORT_LIST);

?>