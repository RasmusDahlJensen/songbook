<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// Her kan du indsætte dine routes


// Hent liste af artists
Route::add('/api/artist/', function() {
    $artist = new Artist;
    $result = $artist->listArtist();
    echo Tools::jsonParser($result);    
});

//Hent specifik artist detaljer

Route::add('/api/artist/([0-9]*)', function($id) {
    $artist = new artist;
    $result = $artist->details($id);
    echo Tools::jsonParser($result);

});

Route::run('/');
?>