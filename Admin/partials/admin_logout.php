<?php

session_start();
echo "You are logged out! Please wait...";
session_destroy();
header("Location:../../index.php");


?>