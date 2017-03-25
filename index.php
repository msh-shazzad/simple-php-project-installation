<?php 	
	session_start();
    if(isset($_SESSION['id'])) 
    { 
        $id = $_SESSION['id'];
        $name = $_SESSION['name']; 
    }
    else 
    {
        session_destroy();
        header('location:login.php');
    }
    
	include 'header.php'; 
	include 'autoload.php';
?>
	
	<h1>Hello</h1>
    <a href="logout.php">Log out</a>

<?php include 'footer.php'; ?>