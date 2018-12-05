<?php
require_once('connect.php');
// session_start();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/index.css">

<nav class="navbar navbar-expand-lg navbar-light nbr">
  <a class="navbar-brand" href="index.php">
    <img src="fcrit.svg" width="150" height="155" style="padding-top: 10px;" alt="">
    <strong>STAFF PORTAL</strong>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="books.php"><h4>View Books</h4></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h4>Manage Books</h4>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="addBook.php"><h5>Add Books</h5></a>
          <a class="dropdown-item" href="removeBook.php"><h5>Remove Books</h5></a>
          <a class="dropdown-item" href="allissuedbooks.php"><h5>Issued Books</h5></a>
          <a class="dropdown-item" href="issuebooks.php"><h5>Issue</h5></a>
          <a class="dropdown-item" href="update.php"><h5>Update</h5></a>
          <a class="dropdown-item" href="reissue.php"><h5>Reissue</h5></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><h4>Log Out</h4></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="back.php" method="POST">
      <input name='searchquery' class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div>
</nav>  