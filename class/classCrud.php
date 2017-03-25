<?php  
	class Crud extends Database 
	{
		public function signup($user_name,$user_email,$user_hash_pass)
		{
			$sql = "INSERT into users(user_name,user_pass,user_email) values ('$user_name','$user_hash_pass','$user_email')";

			$run_sql = $this->conn->query($sql);

			if($run_sql)
			{
				return true;
			}
			else return false;
		}

		public function checkUserNameAvailability($name)
		{
	        $sql = "SELECT * FROM users WHERE user_name = '$name'";

	        $run_sql = $this->conn->query($sql);
	        
			$data = $run_sql->fetch(PDO::FETCH_ASSOC);

	        if($data != null)
	        {
	        	$aid = $data['id'];	        	
		   		return $aid;	  
	        }      	        
    	}

		public function login($name)
		{
	        $sql = "SELECT * FROM users WHERE user_name = '$name'";

	        $run_sql = $this->conn->query($sql);	
	        
	        while($data = $run_sql->fetch(PDO::FETCH_ASSOC))
	        {
	        	$id = $data['id'];
	        	$_SESSION['user_pass'] = $data['user_pass'];
	        	$_SESSION['name'] = $data['user_name'];
	        }
	        return $id;	
    	}
	}
?>