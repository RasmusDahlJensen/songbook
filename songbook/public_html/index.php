<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/incl/init.php");


$song = new Song;
// var_dump($song->list());

?>


<?php 

$song = new User();
$song->firstName = "Rasmus";
$song->lastName = "Jensen";
$song->email = "rjen@placeholder.dk";
$song->password = "qwerty1234";
$song->birthday = "01/01-2000";
// $song->showUserDetails();
// $song->getFullName();




?>