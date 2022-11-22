<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// Her kan du indsætte dine routes


// Hent liste af sange
Route::add('/api/artist/', function() {
    $artist = new artist;
    var_dump($artist->listArtist());
});

Route::run('/');
?>