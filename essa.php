<?php

$hostname = 'localhost';

$database = 'testowa';

$username = 'root';

$password = '';



$conn = mysqli_connect($hostname, $username, $password, $database);



$sql = "INSERT INTO `testowa` (`numer`)

        VALUES (15)";

       

if($result = mysqli_query($conn, $sql)) echo "Dodano nowy rekord";

else echo "Nie udało się dodać nowego rekordu";




$query = "SELECT * FROM testowa";

$result = mysqli_query($conn, $query);



while($row = mysqli_fetch_row($result)){

    echo $row[0]."<br>";

}



?>