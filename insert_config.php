<?php 
	// collects the inserted informations and creates 'config.php' file using those
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$hname = $_REQUEST["hname"];
		$uname = $_REQUEST["uname"];
		$pass = $_REQUEST["pass"];
		$db_name = $_REQUEST["dbname"];

		$myfile = fopen("config.php", "w");

		$txt = "<?php 
	class Database { 
		public \$hostname='".$hname."'; 
		public \$username='".$uname."'; 
		public \$password='".$pass."'; 
		public \$dbname='".$db_name."';
		public \$conn; 

			function __construct(){
				try
 					{
 						\$this->conn = new PDO(\"mysql:host=\$this->hostname;dbname=\$this->dbname\",\$this->username,\$this->password);
 					}

 				catch(PDOException \$e)
 					{
 						echo \$e->getmessage();
 					}
			}


} ?> ";

		fwrite($myfile,$txt);
		fclose($myfile);

		include 'create_table.php'; // 'create_table.php' creates the necssary tables in our database.
		
		echo "<script type='text/javascript'>window.location = 'signup.php'</script>"; // Than the user user is redirected to 'signup.php' for user registration.
	}



?>