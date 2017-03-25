<?php
	include 'config.php';

	$db = new Database();

	$create_users_table_sql = "CREATE TABLE `users` (
	  `id` int(10) NOT NULL AUTO_INCREMENT,`user_name` varchar(20) NOT NULL,
	  `user_pass` varchar(200) NOT NULL,`user_email` varchar(100) NOT NULL,
	  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`id`))
	  ENGINE=InnoDB DEFAULT CHARSET=utf8";

	$run_create_users_table_sql = $db->conn->query($create_users_table_sql);
?>