<?php
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
