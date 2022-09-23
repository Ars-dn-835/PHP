<?php

try {
	$pdo = new PDO('mysql:dbname=lesson; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}