<?php

Sdb = new \PDO("mysql:host-localhost;dbname-test_oo","root","root");

$query = "Select * from products";

$stmt = Sdb->prepare($query);
$stmt ->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);

?>
