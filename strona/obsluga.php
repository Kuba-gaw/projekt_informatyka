<?php
require_once "connect.php";
$query= "SELECT * FROM uzytkownicy";
$result= mysqli_query($connection, $query);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        echo $row["nazwa"] . " " . $row["haslo"] . "<br>";
    }
    mysqli_free_result($result);
}else{
    echo "Błąd zapytania: " . mysqli_error($connection);
}
mysqli_close($connection);
?>