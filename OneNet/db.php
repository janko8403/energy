<?php
	try {
		$dbh = new PDO('mysql:host=localhost; dbname=samprodukcja', 'root', '!$eP^&Uty69!');

		$dbh->query('SET NAMES utf8');
		$dbh->query('SET CHARACTER_SET utf8_unicode_ci');
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>