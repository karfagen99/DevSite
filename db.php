<?php

$pdo = new PDO('mysql:host=localhost;dbname=devsite', 'root','');
$sql = 'SELECT * FROM news';
$stmt = $pdo->query($sql);
$info = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($info as $key){
    echo $key['title']. '-' . $key['description'] . "<br>";
}