<?php
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];
// admin content start
route('/admin-content', 'adminController');
route('/admin-login', 'adminLoginController');
route('/user/(?<id>[\d]+)', 'singleUsersController');

route('/user/(?<id>[\d]+)/edit', 'singleEditController', "POST");
route('/admin-login/reg', 'adminUser_Registration_Controller', "POST");
route('/admin-login', 'aLoginSubmitController', "POST");

route('/adminlogout', 'aLogoutSubmitController');
// admin content end

route('/', 'homeController');
route('/login', 'loginController');
route('/myData', 'myDataChangeController');

route('/myData/edit', 'myDataChangeEditController', "POST");
route('/login/reg', 'User_Registration_Controller', "POST");
route('/login', 'LoginSubmitController', "POST");
route('/', 'MessageSubmitController', "POST");

route('/logout', 'LogoutSubmitController');
route('/informative', 'informativeController');
route('/monthly-offer', 'monthlyOfferController');

list($view, $data) = dispatch($cleaned, 'notFoundController');

if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}

extract($data);
// admin content start
$a_user = aCreateUser();
// admin content end
$user = createUser();
ob_clean();

require_once "config.php";
require_once "tamplates/layout.php";
