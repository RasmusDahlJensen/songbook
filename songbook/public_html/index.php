<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/incl/init.php");


$song = new Song;
// var_dump($song->listSong());


$artist = new artist;
// var_dump($artist->listArtist())

?>


<?php 

$song = new User();
$song->id = "1";
$song->username = "raje";
$song->firstName = "Rasmus";
$song->lastName = "Jensen";
$song->email = "rjen@placeholder.dk";
$song->password = "qwerty1234";
$song->birthday = "01/01-2000";
$song->address = "placeholder street";
$song->postcode = "9000";
$song->city = "placeholderCity";
$song->country = "placeholderstan";
// $song->showUserDetails();
// $song->getFullName();
// $song->getFullAddress();




?>