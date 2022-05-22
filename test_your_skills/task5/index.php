<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=prod';
$name = 'root';
$password = '123123';

$connection = new PDO ($dsn, $name, $password);

try {
    $connection = new PDO($dsn, $name, $password);
    echo "connection to the database is established";
}
catch (PDOException $e) {
    echo "Connection failed:" .$e->getMessage();
}

$prod_name = $_POST ['prodname'];
$prod_quantity = $_POST ['quantity'];

$sgl = 'SELECT * FROM `products`';

$stm = $connection->query($sgl);
$stm->execute();
$list = $stm->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($list);