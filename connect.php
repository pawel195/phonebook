<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ksiazka_telefoniczna', 'ijdbuser', 'pai');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
	} 
	catch (PDOException $e) {
		print 'Nie można połączyć się z serwerem bazy danych: ' . $e->getMessage();
		exit();
		}
?>
