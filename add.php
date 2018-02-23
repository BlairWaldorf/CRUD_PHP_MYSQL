<!-- function to add new tasks/entrys to table from initial page -->

<?php
include 'db.php';

if(isset($_POST['send'])){

  $name = $_POST['taskname'];
  $description = $_POST['taskdescription'];

  // inserting into db data from name and description from form
  $sql = "INSERT INTO tasks (name, description) VALUES ('$name', '$description')";

  //Executing query and storing data into a $value variable
  $value = $db->query($sql);

  //If $value is true, return initial page
  if($value){
    header('location: index.php');
    }

}

 ?>
