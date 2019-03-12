<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ksiazka telefoniczna</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>

             h4{
                text-align: center;
                font-family: "Arial";
                }
           body{
                background: url('img/bckgr-photo.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                margin-top: 4px;
                }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
      <font color= "white"><div class="col-md-11 text-right">Zalogowany jako: <?php echo $_SESSION['userlogin'] ?> </div></font>
      <div class="col-md-1">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Wyloguj
        </a>
      </div>
    </div>

</div>
</body>
</html>
