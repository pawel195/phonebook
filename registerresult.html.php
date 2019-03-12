<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ksiazka telefoniczna</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
             h3{
               color: white;
                }
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
    .form-group{margin: 7px;
                }

    </style>
</head>
<body>
  <div class="container">
    <center><div class="well-sm" style="width: 50%;"><h3>Ksiazka telefoniczna<h3></div>
      <font color= "green"><div class="well"><label><?php echo $output; ?></label></div></font>
      <a href="homepage.html.php">Przenies na strone glowna</a></center>
      <p></p>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="background-color:lavender;"><h4>Zaloguj się</h4>

      <form action="" method="post">
        <div class="form-group">
          <label for="usr">Nazwa uzytkownika:</label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
          <label for="pwd">Haslo:</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <button type="reset" class="btn btn-default">Wyczysc</button>
        <p></p>
        <input type="submit" class="btn btn-info btn-block" value="Zaloguj sie">
        <p></p>
      </div>
    </div>
    </form>
</body>
</html>
