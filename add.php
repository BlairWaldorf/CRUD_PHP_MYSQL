<?php
include 'db.php';

if(isset($_POST['send'])){

  $name = $_POST['taskname'];
  $description = $_POST['taskdescription'];

$sql = "INSERT INTO tasks (name, description) VALUES ('$name', '$description')";

$value = $db->query($sql);

if($value){
  header('location: index.php');
}

}

 ?>
