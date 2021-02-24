<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP-MySQL Connection</title>
</head>
<body>
  <?php
  include 'header.php';
  ?>
  <!-- PHP Code below -->
  <?php

    // Connecting to Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create a Connection
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
      die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Connection Failed. ' . mysqli_connect_error() .
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
    }
    else{
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Connection Successful.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }

  // Create a Database
  $sql = "CREATE DATABASE phptest";
  $result = mysqli_query($conn, $sql); // Execute the Query
  // echo var_dump($result); // Will print true or false based on query executed or not

  // Check for Database Creation Success
  if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Database Created.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Database Creation Failed. ' . mysqli_error($conn) .
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }

  // Create a Table in our Database
  $database = "phptest"; // Specified database here so that we can directly run our queries in this one
  $conn = mysqli_connect($servername, $username, $password, $database);
  

  ?>
  <!-- Registeration Section below -->
  <div class="container">
  <form class="mt-5">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname">
      </div>
      <div class="form-group col-md-6">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname">
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  <!-- JS Links Below -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>