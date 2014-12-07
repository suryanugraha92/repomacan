<?php 
include 'helper.php';

$hour = $_POST['hour'];
$week = $_POST['week'];

writeCron($hour, $week);

header('Location: index.php');
?>
