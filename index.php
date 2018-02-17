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
        <button type="button" data-toggle="modal" data-target="#modal-todo" class="col-md-4 btn btn-outline-success btn-lg">
          <img id="myimage" src="img/plus.png"/>
        </button>
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Task:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add</button>
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
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>
            <button type="button" class="btn btn-outline-light btn-lg">
              <img id="myimage" src="img/edit.png"/>
            </button>
            <button type="button" class="btn btn-outline-light btn-lg">
              <img id="myimage" src="img/delete.png"/>
            </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

<!-- Firebase connection -->
<script src="https://www.gstatic.com/firebasejs/4.10.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAb3hhX_asiAwQAVdwiN74CC8BFd8mZ6Pc",
    authDomain: "crud-php-ad846.firebaseapp.com",
    databaseURL: "https://crud-php-ad846.firebaseio.com",
    projectId: "crud-php-ad846",
    storageBucket: "crud-php-ad846.appspot.com",
    messagingSenderId: "16127055915"
  };
  firebase.initializeApp(config);
</script>
<!-- Firebase connection -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
