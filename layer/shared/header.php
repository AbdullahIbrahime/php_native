<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Quiz/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="script" src="./server.php">
    <title>Document</title>
</head>

<body class="p-3 mb-2 bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Employees
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Quiz/Employee/list_data.php">list All</a>
          <a class="dropdown-item" href="/Quiz/Employee/Insert.php">Insert new</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Departaments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/Quiz/Department/list_data.php">list All</a>
          <a class="dropdown-item" href="/Quiz/Department/Insert.php">Insert new</a>
        </div>
      </li>
    </ul>
  </div>
</nav>