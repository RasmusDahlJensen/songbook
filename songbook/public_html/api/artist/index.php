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
    $artist = new Artist;
    $result = $artist->details($id);
    echo Tools::jsonParser($result);

});

//Create artist

Route::add('/api/artist/', function(){
    $artist = new Artist;
	$artist->name = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : null;

	if($artist->name) {
        echo $artist->create();
	} else {
		echo "Kan ikke oprette artisten";
	}

}, 'post');

//Update artist

Route::add('/api/artist/', function(){
    $data = file_get_contents("php://input");
	parse_str($data, $parsed_data);

    $artist = new Artist;
	$artist->id = isset($parsed_data['id']) && !empty($parsed_data['id']) ? (int)$parsed_data['id'] : null;
	$artist->name = isset($parsed_data['name']) && !empty($parsed_data['name']) ? $parsed_data['name'] : null;

	if($artist->id && $artist->name) {
        echo $artist->update();
	} else {
		echo "Kan ikke oprette artisten";
	}

}, 'put');

Route::run('/');
?>