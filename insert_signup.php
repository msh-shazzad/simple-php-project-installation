<?php
	include 'autoload.php';

	$db = new Crud();

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$user_name = $_REQUEST["uname"];
		$user_email = $_REQUEST["umail"];
		$user_pass = $_REQUEST["upass"];

		$login_id = $db->checkUserNameAvailability($user_name); // Checks if the user name is available
		
		if ($login_id == false)
		{
			$user_hash_pass = password_hash($user_pass,PASSWORD_DEFAULT,['cost'=>12]);

			$send = $db->signup($user_name,$user_email,$user_hash_pass);

			if($send)
			{
				$msg = "Successfully registered! Please <a href='login.php'>login</a> here.";
			}
			else
			{
				echo "Error";
			}
		}
		else
		{
			$msg = "Username Exits! Enter a new one.";
		}
		
	}

?>