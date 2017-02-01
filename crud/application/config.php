<?php
$host="localhost";
$user="crud";
$pwd="crud";
$dbname="crud";
$db = mysqli_connect($host, $user, $pwd, $dbname);
if (!$db) {
    die("failed to connect to database.......");
}
