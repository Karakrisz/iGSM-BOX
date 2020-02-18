<?php
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/iGSM-PHP-DEMO/', 'homeController');
route('/iGSM-PHP-DEMO/login', 'loginController');

route('/iGSM-PHP-DEMO/login/reg', 'User_Registration_Controller', "POST");
route('/iGSM-PHP-DEMO/login', 'LoginSubmitController', "POST");

route('/iGSM-PHP-DEMO/logout', 'LogoutSubmitController');

list($view, $data) = dispatch($cleaned, 'notFoundController');

if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}

extract($data);
$user = createUser();
// $inserted = array_key_exists("inserted", $_SESSION);  
// unset($_SESSION["inserted"]); php kóddal üzenet megjelenítés / display message with php code
ob_clean();
require_once "config.php";
require_once "tamplates/layout.php";
