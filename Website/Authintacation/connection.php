<?php>

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "motorcycle_shop";

if(!$con = mysqlli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!")
}
?>