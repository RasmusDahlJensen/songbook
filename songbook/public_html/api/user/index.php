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

Route::run('/');
?>