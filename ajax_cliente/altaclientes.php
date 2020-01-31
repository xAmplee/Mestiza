<?php
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$dic1=$_POST["dic1"];
$dic2=$_POST["dic2"];
$city=$_POST["city"];
$state=$_POST["state"];
$cp=$_POST["cp"];
$check=$_POST["check"];

if(!is_numeric($cp))
{
    echo "2";
    exit;
}
?>