<?php
$host="localhost";
$user="root";
$password="";
$bd="user";

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion" . mysqli_connect_error());
}