<?php include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $db->query($sql);

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
    <div class="row">
      <div class="col-md-12 text-center">
        <button type="button" data-toggle="modal" data-target="#modal-todo" class="col-md-4 btn btn-outline-success btn-lg">+</button>
        <!-- <button type="button" class="col-md-4 btn btn-outline-danger btn-lg">
          <img id="myimage" src="img/minus.png"/>
        </button> -->
      </div>
    </div>
  </div>
<div class="container">
<div class="modal fade" id="modal-todo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add.php">
          <div class="form-group">
            <label class="col-form-label">Task:</label>
            <input type="text" class="form-control" required name="taskname">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="taskdescription"></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" name="send" class="btn btn-primary">Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <div class="row">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Task</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php while($row = $result->fetch_assoc()): ?>
          <th scope="row"><?php echo $row['id']  ?></th>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['description'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-outline-light btn-lg">
              <img id="myimage" src="img/edit.png"/>
            </a>
            <a  href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-outline-light btn-lg">
              <img id="myimage" src="img/delete.png"/>
            </a>
          </td>
        </tr>
        <?php endwhile ?>
      </tbody>
    </table>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
