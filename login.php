<form class="modal-content animate" action="index.php?page=login" method="POST">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="containerlogin">
        <label for="uname"><b>Nazwa Użytkownika</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="passwd"><b>Hasło</b></label>
        <input type="password" placeholder="Enter Password" name="passwd" required>
        
        <button type="submit" name="butt">Login</button>
        <?php

        if (isset($_POST['butt'])) {
            $uname = $_POST['uname'];
            $passwd = $_POST['passwd'];
            $_SESSION['uname'] = $uname;
            $_SESSION['passwd'] = $passwd;
            passChecker($_SESSION['passwd'], $_SESSION['uname']);
            
        }


        ?>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Zapamiętaj mnie
        </label>
    </div>

    <div class="containerlogin" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Anuluj</button><br>
        <span class="passwd"><a href="index.php?page=rejestracja">Nie masz konta? Zarejestruj się!</a></span><br>
        <span class="passwd"><a href="index.php?page=remindpaswd">Zapomniałeś hasła??</a></span>
    </div>
</form>

<form action="index.php" method="post">
<input type="submit" value="Wyloguj" name="out"/>
<?php
    if(isset($_POST['out'])){
        unset($_SESSION['uname']);
        unset($_SESSION['passwd']);
    }
?>
</form>