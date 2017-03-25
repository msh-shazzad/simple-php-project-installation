<?php
	include 'autoload.php';

	$db = new Crud();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_REQUEST['uname'];
        $user_pass = $_REQUEST['password'];

        $login_id = $db->login($name);

        if($login_id)
        {        	
            $db_pass = $_SESSION['user_pass'];
            $check_condition =  password_verify($user_pass, $db_pass);
            
            if($check_condition == true)
            {
            	$_SESSION['id'] = $login_id;
                header('Location: index.php');
            }
            else
            {            
                $msg = "Wrong Password!";
            }
        } 
        else
        {            
            $msg = "Wrong Username!";
        }
    }
?>