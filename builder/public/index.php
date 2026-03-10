<?php

use App\MyLitteralQueryBuilder;
use App\MySQLQueryBuilder;

require('../vendor/autoload.php');

$qb = new MySQLQueryBuilder();
$r1 = $qb->select(["bob"])
    ->where("a", ">","b")
    ->from("users")
    ->build();

$r2 = $qb->select(["lion","cat"])
    ->from("animals")
    ->where("color", "=", "blue")
    ->where("gender", "=", "male")
    ->build();

echo "<h1> Builder </h1>\n";
echo "Requête 1 : " . $r1 . "<br>";
echo "Requête 2 : " . $r2 . "<br>";

$lq = new MyLitteralQueryBuilder();
$r3 = $lq->select(["bob"])
    ->where("a", "=","b")
    ->from("users")
    ->build();

echo "Requête 3 : " . $r3 . "<br>";