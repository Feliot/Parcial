<?php 

session_start();
$_SESSION['dni'] = null ; //Creo el DNI de la Session
session_destroy()//destruyo la session
 ?>