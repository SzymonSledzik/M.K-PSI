<?php
session_start();

if (isset($_GET["page"])) {
    $strona = $_GET["page"];
} else {
    $strona = "main";
}
include("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?page=main">Strona Główna</a></li>
                    <li><a href="index.php?page=monuments">Monumenty</a></li>
                    <li><a href="index.php?page=contact">Kontakt</a></li>
                    <li><a href="index.php?page=map">Mapa</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="index.php?page=rejestracja"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($strona != null) include($strona . '.php');
    ?>

    <footer class="container-fluid text-center">
        <p>Footer</p>
    </footer>
</body>