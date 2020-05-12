<?php
function logMessage($level, $message)
{
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2)[0];
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] ". date(DATE_ISO8601). " " . $backtrace["file"] . ":" . $backtrace["line"]. 
        " $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}


function esc($string)
{
    echo htmlspecialchars($string);
}


function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}
// $his_job, $his_mobile
function User_Registration($connection, $register_name, $register_email, $register_password)
{
    $didNotBuy = 'didNotBuy';
    $pass_hash = password_hash($register_password, PASSWORD_BCRYPT);
    if ($statement = mysqli_prepare($connection, 'INSERT INTO users (name, email, password,status) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $register_name, $register_email, $pass_hash, $didNotBuy);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function loginUser($connection, $email, $password)
{
    if ($statement = mysqli_prepare($connection, 'SELECT id, name, password FROM users WHERE emai = ?')) {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($password, $record["password"])) {
            $statement = mysqli_prepare($connection, 'UPDATE users SET last_login = ? WHERE email = ?');
            mysqli_stmt_bind_param($statement, 'ss', date("Y.m.d H:i:s"), $email);
            mysqli_stmt_execute($statement);
            return $record;
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function createUser()
{
    $loggedIn = array_key_exists("user", $_SESSION);
    return [
        "loggedIn" => $loggedIn,
        "name" => $loggedIn ? $_SESSION["user"]["name"] : null,
        "id" => $loggedIn ? $_SESSION["user"]["id"] : null
    ];
}

function sendMessage($connection, $mmail, $message)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO messages (userName,userEmail,message) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $_SESSION["user"]["name"], $mmail, $message);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function getUsers($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * FROM users')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

function myByData($connection)
{
    $id = $_SESSION["user"]["id"];
    if ($statement = mysqli_prepare($connection, 'SELECT name, email, status FROM users WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        return $record;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function myDataChange($connection, $name, $email)
{
    $id = $_SESSION["user"]["id"];
    if ($statement = mysqli_prepare($connection, 'UPDATE users SET name = ?, email = ? WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, "ssi", $name, $email, $id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        return $record;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

// admin content start
function getUsersById($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * FROM users WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function getMessages($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * FROM messages')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

function updateUsersStatus($connection, $id)
{
    $title = 'bought';
    if ($statement = mysqli_prepare($connection, 'UPDATE users SET status = ? WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'si', $title, $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function adminUser_Registration($connection, $a_register_name, $a_register_email, $a_register_password)
{
    $pass_hash = password_hash($a_register_password, PASSWORD_BCRYPT);
    if ($statement = mysqli_prepare($connection, 'INSERT INTO adminUsers (aUserName, aUserEmail, password) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $a_register_name, $a_register_email, $pass_hash);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function aloginUser($connection, $a_email, $a_password)
{
    if ($statement = mysqli_prepare($connection, 'SELECT aUserName, password FROM adminUsers WHERE aUserEmail = ?')) {
        mysqli_stmt_bind_param($statement, "s", $a_email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($a_password, $record["password"])) {
            $statement = mysqli_prepare($connection, 'UPDATE adminUsers SET lastLogin = ? WHERE aUserEmail = ?');
            mysqli_stmt_bind_param($statement, 'ss', date("Y.m.d H:i:s"), $aUserEmail);
            mysqli_stmt_execute($statement);
            return $record;
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function aCreateUser()
{
    $aloggedIn = array_key_exists("a_user", $_SESSION);
    return [
        "aloggedIn" => $aloggedIn,
        "aUserName" => $aloggedIn ? $_SESSION["a_user"]["aUserName"] : null
    ];
}
