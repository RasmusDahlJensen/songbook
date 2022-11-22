<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// Her kan du indsætte dine routes

Route::add('/api/song/', function() {
    $song = new Song;
    $result = $song->listSong();
    echo Tools::jsonParser($result);
});

// Hent sang detaljer
Route::add('/api/song/([0-9]*)', function($id) {
    echo "hent detaljer";
});

Route::run('/');
?>