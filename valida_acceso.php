<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}

///********VERIFICA LA OPCION CORRESPONDIENTE*****************///
require('class_lib/funciones.php');
$p=test_input($_POST['pass']);
$opt=test_input($_POST['opt']);
$contra_ajustes="12345";
$contra_respaldo="12345";

if($opt==72528422){
if($p==$contra_ajustes){
  $_SESSION['autorization']=1;
  echo "1";
}else{
  echo "0";
 }
}

if($opt==725284221){
if($p==$contra_respaldo){
  $_SESSION['autorization_bd']=1;
  echo "3";
}else{
  echo "2";
 }
}
?>
