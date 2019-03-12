<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Ksiazka telefoniczna</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
             h2{
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
                margin-top: 0px;
                }
    .form-group{margin: 2px;
                }

    </style>
</head>
<body>
  <div class="container">
    <center><div class="well-sm" style="width: 50%;"><h2>Ksiazka telefoniczna<h2></div></center>
            <div style="color: green" class="well-sm" style="width: 50%;"><h3><?php if(empty($logout_info))
                      $logout_info = '';
                      else{
                      echo $logout_info;}
                      ?></h3></div>
    <div class="row">
      <div class="col-md-4" style="background-color:lavender;"><h4>Zaloguj się</h4>

      <form action="login.php" method="post">
        <div style="color: red">
          <?php if(empty($err))
                    $err = '';
                    else{
                    echo $err;}
          ?>
        </div>
        <div class="form-group">
          <label for="usr">Nazwa uzytkownika:</label>
          <input type="text" class="form-control" id="usr" name="usr">
        </div>
        <div class="form-group">
          <label for="pwd">Haslo:</label>
          <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <button type="reset" class="btn btn-default">Wyczysc</button>
        <p></p>
        <input type="submit" class="btn btn-info btn-block" value="Zaloguj sie">
        <p></p>
      </div>
    </form>


    <div class="col-md-8" style="background-color:lavenderblush;"><h4>Rejestracja</h4>
      <form action="register.php" method="post">
        <div class="form-group">
          <label for="name">Imie:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="lastname">Nazwisko:</label>
          <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
          <label for="number">Numer telefonu:</label>
          <input type="text" class="form-control" id="number" name="number">
        </div>
        <div class="form-group">
          <label for="address">Adres zamieszkania:</label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
          <label for="usr_r">Nazwa uzytkownika:</label>
          <input type="text" class="form-control" id="usr_r" name="usr_r">
        </div>
        <div class="form-group">
          <label for="pwd_r">Haslo:</label>
          <input type="password" class="form-control" id="pwd_r" name="pwd_r">
        </div>
        <div class="form-group">
          <label for="pwd_r2">Powtorz haslo:</label>
          <input type="password" class="form-control" id="pwd_r2" name="pwd_r2">
        </div>
        <button type="reset" class="btn btn-default">Wyczysc</button>
        <p></p>
        <input type="submit" class="btn btn-danger btn-block" value="Zarejestruj sie">
        <p></p>
      </div>
    </form>
  </div>
</div>
</body>
</html>
