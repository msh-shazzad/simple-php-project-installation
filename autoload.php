<?php

	$file = "config.php"; 

	if(file_exists($file)) // Checks if 'config.php' file is available where the Database connections codes 						are written.
	{			
		include 'config.php'; // If 'config.php' file is available than it'll be included
	}
	else
	{
		echo "<script type='text/javascript'>window.location = 'setup.php'</script>"; // Otherwise 'setup.php' file will appear in the browser	
	}

	include 'class/classCrud.php'; // 'classCrud.php' contains the necessary methods/functions
?>