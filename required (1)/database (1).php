<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=matcha', 'root', '19920904');

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e)
{
        die('error : ' . $e->getMessage());
}