<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/incl/init.php");


$song = new Song;
var_dump($song->list());

?>