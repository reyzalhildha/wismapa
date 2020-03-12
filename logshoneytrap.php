<?php
  session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body style="">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> <a class="navbar-brand" href="index.php">
        <b><b> PPSDM APARATUR</b></b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="admin.php">Dashboard</a> </li>
          <li class="nav-item"> <a class="nav-link" href="logshoneytrap.php">Logs Honeypot</a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        </ul> <a class="btn btn-primary navbar-btn ml-md-2" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
  <div class="py-2" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h1 class="text-center" style=""><b>Logs Honeytrap</b></h1>
          <?php
            echo nl2br( file_get_contents('loggingtrap.txt') );
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
