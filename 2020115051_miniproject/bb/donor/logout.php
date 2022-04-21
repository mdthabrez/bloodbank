





<?php
session_start();
unset($_SESSION['email']);
session_destroy();

setcookie("email", NULL, time() - 86400,'/');
setcookie("password", NULL, time() - 86400 ,'/');
unset($_COOKIE["email"]);
unset($_COOKIE["password"]);

header("Location: ../login.php");


?>