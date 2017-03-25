<?php	
    session_start();
	include 'check_login.php';

    include 'header.php';

	if(isset($_SESSION['id']))
    {
	   echo "<script type='text/javascript'>window.location = 'index.php'</script>";
	}
	else session_destroy();
?>

<body>

	<div class="container">        
        <div id="signin-form">
            <label class="login-error"><?php if(isset($msg))echo $msg?></label>
            <form class="form-signin" method="post" id="login-form">          
                <h4 class="form-signin-heading">Log In</h4>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="Username" required />
                    <!-- <span id="check-e"></span> -->
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required/>
                </div>
                
                <div class="form-group">
                    <button type="submit" name="" class="btn butt-edit">SIGN IN</button>
                </div> 
            </form>
        </div>    
    </div>

</body>
</html>