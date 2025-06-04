<?php
require_once "config.php";
$connection=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
if(!$connection){
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}
mysqli_set_charset($connection, "utf8mb4");
?>