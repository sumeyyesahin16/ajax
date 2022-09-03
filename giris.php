<?php

include("settings.php");

session_start();

ob_start();

if(($_POST["username"]==$username) and ($_POST["password"]==$password)){
    $_SESSION["login"] = "true";
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location:index.php");
}

else{
    echo "Kullancı Adı veya Şifre Yanlış.<br>";
    echo "Giriş sayfasına yönlendiriliyorsunuz.";
    header("Refresh: 2; url=login.php");
}

ob_end_flush();
?>