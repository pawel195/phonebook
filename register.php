<?php
include("connect.php");

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');
$number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
$usr_r = substr(addslashes(htmlspecialchars($_POST['usr_r'])),0,32);
$pwd_r = substr(addslashes($_POST['pwd_r']),0,32);
$pwd_r2 = substr($_POST['pwd_r2'],0,32);
$usr_r = trim($usr_r);

//$spr1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE username = '$usr_r' LIMIT 1"));

$warning = '';
$spr2 = strlen($usr_r);
$spr3 = strlen($pwd_r);

if (!$usr_r || !$name || !$lastname || !$number || !$address || !$pwd_r || !$pwd_r2 ) {
  $warning .= "Musisz wypełnić wszystkie pola!<br>"; }
    if ($spr2 < 4) {
      $warning .= "Nazwa uzytkownika musi mieć przynajmniej 4 znaki<br>"; }
    if ($spr3 < 4) {
      $warning .= "Hasło musi mieć przynajmniej 4 znaki<br>"; }
    //if ($spr1[0] >= 1) {
       //$warning .= "Ten login jest zajęty!<br>"; }
    if ($pwd_r != $pwd_r2) {
      $warning .= "Podane hasła nie są takie same<br>";}

  $usr_r = str_replace ( ' ','', $usr_r );
  $pwd_r = md5($pwd_r);
  $output='';
try {
    $sql = "INSERT INTO `users` (username, password, Imie, Nazwisko, Numer, Adres) VALUES('$usr_r','$pwd_r','$name','$lastname','$number','$address')";
        $s = $pdo->prepare($sql);
        $s->execute();
        $output = ('<span style="color:green">Rejestracja przebiegła pomyślnie. Mozesz sie teraz zalogowac.</span>');
    } catch (PDOException $e) {
        $output = ('<span style="color:red">Wystąpił błąd: ' . $e->getMessage() .'</span>');
        exit();
    }
include("registerresult.html.php");
?>
