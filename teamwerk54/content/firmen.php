<?php
session_start();
//Firmen

//Einbinden von Klassen
require '../Classes/Security.php';
require '../Classes/User.php';
require '../Classes/Visualizer.php';

//Deklaration of Variables
$gb_infinityScroll = false;

//Detect if call from infinityScroll
if(isset($_POST['infinityScroll'])){
  if($_POST['infinityScroll'] == 'true'){
    $gb_infinityScroll = true;
  }
}

$visualized = new Visualizer("PLACEHOLDER", 20);

 ?>
