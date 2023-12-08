<?php

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$db       = "unimar";
try {
    $conn = new PDO("mysql:dbname=$db;host=$servidor", "$usuario", "$senha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
