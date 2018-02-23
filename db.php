<!-- function to connect to db  -->

<?php

  $db = new Mysqli;
                 //adress,   usr,  pwd, sql db name
  $db->connect('localhost','root','','crud-php');

  // Status notification
  if($db){
    echo "Database connection: Success!";
  }else{
    echo "Ops, something is wrong. Check db connection!";
  }

 ?>
