<?php
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

function loginController()
{
    $containsError = array_key_exists("containsError", $_SESSION);
    unset($_SESSION["containsError"]);
    return [
        "login",
        [
            "title" => "Bejelentkezés / Regisztráció",
            "containsError" => $containsError,
        ]
    ];
}

function User_Registration_Controller()
{
    $register_name  = $_POST['register_name'];
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    // $his_job = $_POST['his_job'];
    // $his_mobile = $_POST['his_mobile'];
    $connection = getConnection();
    User_Registration($connection, $register_name, $register_email, $register_password);
    // $_SESSION["inserted"] = 1; php kóddal üzenet megjelenítés / display message with php code
    return [
        "redirect:/iGSM-PHP-DEMO/login",
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
            "name" => $user["name"]
        ];
        $view = "redirect:/iGSM-PHP-DEMO/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/iGSM-PHP-DEMO/login";
    }
    return [
        $view, []
    ];
}

function LogoutSubmitController()
{
    unset($_SESSION["user"]);
    return [
        "redirect:/iGSM-PHP-DEMO/", []
    ];
}
