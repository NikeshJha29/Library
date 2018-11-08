<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <!-- Brand -->

  <a class="navbar-brand" href="#"><img src="image/pondiuni_logo.png" alt="logo" style="width:auto;"></a>
<h1 style="color:white">Personal Library</h1>

  <!-- Links -->
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
      <a class="nav-link" href="Home_page.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contribute_home.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Language
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="categories.php?sub=C">C</a>
        <a class="dropdown-item" href="categories.php?sub=C_Sharp ">C#</a>
        <a class="dropdown-item" href="categories.php?sub=CPP ">C++</a>
         <a class="dropdown-item" href="categories.php?sub=Java">Java</a>
      </div>
    </li>
     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Other Subjects
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="categories.php?sub=Dbms">DBMS</a>
        <a class="dropdown-item" href="categories.php?sub=Operating System">OS</a>
        <a class="dropdown-item" href="categories.php?sub=Algorithm">Algorithms</a>
         <a class="dropdown-item" href="categories.php?sub=Visual Basic">Visual Bacics</a>
          <a class="dropdown-item" href="categories.php?sub=Computer Network">Computer Network</a>
      </div>
    </li>
  </ul>
</nav>
<br>



</body>
</html>
