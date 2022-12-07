<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

    <form action="./fornularze.php" method="POST">
        Wybierz wiek: <input type="number" name="n" value="n">
        <input type="submit" value="wyslij">
</form>

    <?php

if(isset($_POST['n'])){
    echo "Twój wiek: " . htmlspecialchars($_POST['n']) . "<br>";
    $n= $_POST['n'];
wiek($n); }





function wiek($n) {
    if($n<=18) {
        echo "Jestes za młody";
    }
    elseif($n<=45) {
        echo "Jesteś dorosły";
    }
    else {
        echo "Jesteś stary";
    }

}






    ?>
    </body>
</html