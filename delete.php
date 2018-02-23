<!-- delete method -->

<?php
include 'db.php';

$id = $_GET['id'];
// selecting witch row will be modified by ID
$sql = "DELETE FROM tasks WHERE id = '$id'";
// applying query and storing into value variable
$value = $db->query($sql);

if($value){
  header('location: index.php');
}
 ?>
