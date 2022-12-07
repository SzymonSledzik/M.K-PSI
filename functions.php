<?php


// połączenie z bazą danych
$serverName = "localhost";
$userName = "root";
$password = '';
$db = "project";


$conn = mysqli_connect($serverName, $userName, $password, $db);


function addToDB($login, $psw)
{
    // dodanie nowego użytkownika do bazy danych
    global $conn;
    $query = "SELECT * FROM users WHERE uname= '$login'";
    $result = $conn->query($query);
    $asd = $result->fetch_array(MYSQLI_ASSOC);
    if ($asd == null) {
        $hashpsw = sha1($psw);
        $sql = "INSERT INTO `users` (`ID`, `uname`, `passwd`) VALUES (NULL, '$login', '$hashpsw')";

        if ($result = $conn->query($sql)) {
            echo "Zarejestrowano pomyślnie";
        } else {
            echo "Nie udało się zarejestrować";
        }
    }else{echo "Już istnieje taki użytkownik!";}
}

function passChecker($passwd, $uname)
{
    global $conn;
    // sprawdzenie poprawoności hasła w bazie danych
    $query = "SELECT * FROM users WHERE uname = '$uname' ";
    $result = $conn->query($query);
    if ($result != null) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (sha1($passwd) == $row['passwd']) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "XDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD";
        return false;
    }
}


function showMonument($name)
{
    global $conn;
// Wyświetlanie z bazy danych komentarzy
    $query = "SELECT * FROM monuments WHERE monument = '$name' ";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo "<h1>" . $row['monument'] . "</h1>";
    echo "<p>" . $row['info'] . "</p>";
    echo "<img src='" . $row['img'] . "' width=250px>";
}

function addComment($name, $message, $page)
{
    global $conn;
    // dodawanie komentarza do bazy danych
    $sql = "INSERT INTO `comments` (`ID`, `uname`, `message`, `page`) VALUES (NULL, '$name', '$message', '$page')";

    if ($result = $conn->query($sql)) echo "Dodano nowy rekord";
    else echo "Nie udało się dodać nowego rekordu";
}

function showComment()
{
    global $conn;
    $query = "SELECT * FROM comments";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_row($result)) {
        echo "<h3>" . $row[1] . " " . $row[2] . "</h3> <p>" . $row[3] . "</p>";
    }
}

if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
