<?php
  session_start();
  date_default_timezone_set("America/Lima");
  if($_SESSION['autorizado']<>1){
    header("Location: index.php");
  }
?>