<!DOCTYPE html>
<html>
<head>
    <!--HERE HAVE ALL THE FILES THAT THE PAGES NEED-->
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
    <title>Blacklist CPF</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="C:\wamp\www\CPF\css\bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/cpf.css">
    <script src="./js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="./js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="./js/maskCPF.js" type="text/javascript"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Blacklist CPF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="list.php">List<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="blacklist.php">Blacklist<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="status.php">Status Server<span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="consult.php">
      <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00"class="form-control mr-sm-2" type="search"  aria-label="Search">
      <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Consult</button>
    </form>
  </div>
</nav>

  <div class="container">
    <div class="main">
