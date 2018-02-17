<?php

  $db = new Mysqli;
  $db->connect('localhost','root','','crud-php');

  if($db){
    echo "Success!";
  }else{
    echo "Ops, something is wrong. Check db connection!";
  }

 ?>
