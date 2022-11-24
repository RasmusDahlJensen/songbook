<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// List af users

Route::add('/api/user/', function() {
    $user = new User;
    $result = $user->listUsers();
    echo Tools::jsonParser($result);
});

// Hent user detaljer
Route::add('/api/user/([0-9]*)', function($id) {
    $user = new User;
    $result = $user->details($id);
    echo Tools::jsonParser($result);

});

//Create user

Route::add('/api/user/', function(){
    $user = new user;
	$user->username = isset($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] : null;
	$user->firstname = isset($_POST['firstname']) && !empty($_POST['firstname']) ? $_POST['firstname'] : null;
	$user->lastname = isset($_POST['lastname']) && !empty($_POST['lastname']) ? $_POST['lastname'] : null;
	$user->email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : null;
	$user->password = isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] : null;


	if($user->username && $user->firstname && $user->lastname && $user->email && $user->password) {
        echo $user->create();
	} else {
		echo "Kan ikke oprette brugeren";
	}

}, 'post');

Route::run('/');
?>