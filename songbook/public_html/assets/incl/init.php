<?php
//Definer en konstant til document root
define("DOCROOT", $_SERVER['DOCUMENT_ROOT']);
define("COREROOT", str_replace('public_html', 'core/', $_SERVER['DOCUMENT_ROOT']));

require_once(COREROOT . "classes/autoload.php");



$dns = "mysql:host=localhost;dbname=songbook";
$username = "testUser";
$password = "";

try{
    $db = new PDO($dns, $username, $password);

} catch(PDOexception $err){
    echo "Fejl i tilslutning af database: " . $err;
}

?>