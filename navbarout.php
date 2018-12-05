<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/index.css">

<nav class="navbar navbar-expand-lg navbar-light nbr">
  <a class="navbar-brand" href="index.php">
    <img src="fcrit.svg" width="150" height="155" style="padding-top: 10px;" alt="">
     <strong>FCRIT LIBRARY STAFF PORTAL</strong>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="books.php"><h4>Books</h4></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="back.php" method="POST">
      <input name='searchquery' class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
