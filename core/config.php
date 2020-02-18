 <?php
    // Adatbázis csatlakozás
    $config = [
        "DB_HOST" => "localhost",
        "DB_USER" => "root",
        "DB_PASS" => "",
        "DB_NAME" => "igsm-box"
    ];
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
