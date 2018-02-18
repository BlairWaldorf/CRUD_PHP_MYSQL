<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = '$id'";

$value = $db->query($sql);

if($value){
  header('location: index.php');
}
 ?>
