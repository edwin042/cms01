<?php
	//code to connect the database server
	$pdo = new PDO('mysql:dbname=group_work;host=localhost', 'root' , '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 ?>