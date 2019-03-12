<?php

include("connect.php");

$login = $_POST['usr'];
$haslo = $_POST['pwd'];

$haslo = addslashes($haslo);
$login = addslashes($login);
$login = htmlspecialchars($login);


//szyfrowanie hasla
$haslo = md5($haslo);

    if (!$login OR empty($login))
    {
      echo '<p class="alert">Wypełnij pole z loginem!</p>';
      exit;
    }
    if (!$haslo OR empty($haslo))
    {
      echo '<p class="alert">Wypełnij pole z hasłem!</p>';
      exit;
    }



    try
   {
       $sql = 'SELECT COUNT(*) FROM users
       WHERE username = :login AND password = :haslo';
       $s = $pdo->prepare($sql);
       $s->bindValue(':login', $login);
       $s->bindValue(':haslo', $haslo);
       $s->execute();
   }
   catch (PDOException $e)
   {
       echo 'Błąd przy poszukiwaniu usera';
       exit();
   }
   $row = $s->fetch();
     if ($row[0] > 0)
       {
           session_start();
           $_SESSION['userlogin'] = $login;
           include 'mainpage.html.php';
           return TRUE;
       }
     else
       {
           $err = 'Podano błędne dane!!!';
           include 'homepage.html.php';
           return FALSE;
       }
?>
