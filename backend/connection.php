<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "database_inventory";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connection){
die ("Koneksi dengan database gagal: ".mysqli_connect_errno()." -
".mysqli_connect_error());
}
?>