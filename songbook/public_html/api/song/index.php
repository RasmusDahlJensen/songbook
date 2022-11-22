<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// Her kan du indsætte dine routes

Route::add('/api/song/', function() {
    $song = new Song;
    var_dump($song->listSong());
});

Route::run('/');
?>