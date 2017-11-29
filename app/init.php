<?php

// system
class app {
     $system_name = "sweetliving";
     $systen_lang = "pl";
     // $system_Mail_email = "phpstarter@phpstarter.example";
     // $system_Mail_password = "phpstarter";
     // $system_Mail_sentFrom = "phpstarter";
}

// require classes (don't change this)
function __autoload($class_name) {
     require_once './app/classes/' . $class_name . '.php';
}


// auth
if (auth::loggedin() && $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] == "localhost/sweetliving/login.php") {
     header("Location: index.php");
     exit();
}
if (auth::loggedin() && $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] == "localhost/sweetliving/register.php") {
     header("Location: index.php");
     exit();
}

// logout
if (isset($_POST['signoutbtn'])) {
     auth::logout();
}
