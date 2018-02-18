<?php include 'db.php';

$id=$_GET['id'];
$sql = "SELECT * FROM tasks WHERE id ='$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
if(isset($_POST['update'])){
  $taskname = $_POST['taskname'];
  $taskdescription = $_POST['taskdescription'];
  $sql2 = "UPDATE tasks SET name='$taskname', description='$taskdescription' WHERE id = '$id'";
  $db->query($sql2);
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>CRUD PHP SQL</title>
  </head>
  <body>
<div class="container-fluid">
  <div class="row name">
    <div class="col-md-12 text-center">
     <h1 class="centered">TODO CRUD</h1>
    </div>
  </div>
</div>
<div class="container">
  <form method="POST">
    <div class="form-group">
      <label class="col-form-label labelModal">Task:</label>
      <input type="text" class="form-control inputModal" required name="taskname" value="<?php echo $row['name'];?>">
      <label for="message-text" class="col-form-label labelModal">Description:</label>
      <textarea class="form-control inputModal" name="taskdescription"><?php echo $row['description'];?></textarea>
    </div>
    <div class="modal-footer">
      <button type="submit" name="update" class="btn btn-outline-light btn-lg">
        <img id="myimage" src="img/check.png"/>
      </button>
      <a href="index.php"class="btn btn-outline-light btn-lg">
        <img id="myimage" src="img/clear.png"/>
      </a>
    </div>
  </form>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
