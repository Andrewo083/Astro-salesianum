<?php
$host="localhost";
$user="root";
$password="";
$bd="astrodb";

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion en la base de datos");
}