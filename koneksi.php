<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sancus";

    return new PDO("mysql:host=$servername; dbname=$dbname", $username, $password, array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ));

?>