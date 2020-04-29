<?php
// admin content start -------------
function adminController()
{
    $connection = getConnection();
    $getUsersMessages = getMessages($connection);
    $getUsersContent = getUsers($connection);
    return [
        "admin-content",
        [
            "title" => "Admin felület",
            "getUsersMessages" => $getUsersMessages,
            "getUsersContent" => $getUsersContent
        ]
    ];
}



function singleUsersController($params)
{
    $connection = getConnection();
    $Users = getUsersById($connection, $params["id"]);
    return [
        "userdata",
        [
            "title" => $Users["name"],
            "Users" => $Users
        ]
    ];
}

function singleEditController($params)
{
    $id = $params['id'];
    $connection = getConnection();
    updateUsersStatus($connection, $id);
    return [
        "redirect:/user/$id",
        []
    ];
}

function adminLoginController()
{
    $containsError = array_key_exists("containsError", $_SESSION);
    unset($_SESSION["containsError"]);
    return [
        "admin-login",
        [
            "title" => "Új admin regisztráció",
            "containsError" => $containsError
        ]
    ];
}

function adminUser_Registration_Controller()
{
    $a_register_name  = $_POST['a_register_name'];
    $a_register_email = $_POST['a_register_email'];
    $a_register_password = $_POST['a_register_password'];
    // $his_job = $_POST['his_job'];
    // $his_mobile = $_POST['his_mobile']; s
    $connection = getConnection();
    adminUser_Registration($connection, $a_register_name, $a_register_email, $a_register_password);
    return [
        "redirect:/admin-login",
        []
    ];
}

function aLoginSubmitController()
{
    $a_password = trim($_POST['a_password']);
    $a_email = trim($_POST['a_email']);
    $a_user = aLoginUser(getConnection(), $a_email, $a_password);
    if ($a_user != null) {
        $_SESSION["a_user"] = [
            "aUserName" => $a_user["aUserName"]
        ];
        $view = "redirect:/admin-content";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/admin-login";
    }
    return [
        $view, []
    ];
}

function aLogoutSubmitController()
{
    unset($_SESSION["a_user"]);
    return [
        "redirect:/", []
    ];
}
// admin content end -------------

function homeController()
{
    return [
        "home",
        [
            "title" => "Kezdőoldal"
        ]
    ];
}

function notFoundController()
{
    return [
        "404",
        [
            "title" => "A keresett oldal nem található."
        ]
    ];
}

function informativeController()
{
    return [
        "informative",
        [
            "title" => "Adatvédelmi tájékoztató."
        ]
    ];
}

function loginController()
{
    $containsError = array_key_exists("containsError", $_SESSION);
    unset($_SESSION["containsError"]);
    return [
        "login",
        [
            "title" => "Bejelentkezés / Regisztráció",
            "containsError" => $containsError
        ]
    ];
}

function User_Registration_Controller()
{
    $register_name  = $_POST['register_name'];
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    // $his_job = $_POST['his_job'];
    // $his_mobile = $_POST['his_mobile']; s
    $connection = getConnection();
    User_Registration($connection, $register_name, $register_email, $register_password);
    return [
        "redirect:/login",
        []
    ];
}

function LoginSubmitController()
{
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $user = LoginUser(getConnection(), $email, $password);
    if ($user != null) {
        $_SESSION["user"] = [
            "name" => $user["name"],
            "id" => $user["id"]
        ];
        $view = "redirect:/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/login";
    }
    return [
        $view, []
    ];
}

function myDataChangeController()
{
    $connection = getConnection();
    $myData =  myByData($connection);
    return [
        "myDataChange",
        [
            "title" => $myData['name'],
            "myData" => $myData
        ]
    ];
}

function myDataChangeEditController()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $connection = getConnection();
    myDataChange($connection, $name, $email);
    return [
        "redirect:/myData",
        []
    ];
}

function LogoutSubmitController()
{
    unset($_SESSION["user"]);
    return [
        "redirect:/", []
    ];
}

function MessageSubmitController()
{
    $mmail = $_POST['mmail'];
    $message = $_POST['message'];
    $connection = getConnection();
    sendMessage($connection, $mmail, $message);
    return [
        "redirect:/", []
    ];
}
