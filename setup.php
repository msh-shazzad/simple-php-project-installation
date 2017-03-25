<?php
    include 'header.php';
    include 'insert_config.php'; // 'insert_config.php' collects the inserted data and creates a config.php file
?>

<!-- necessary informations to establishing connection to a database are collected through this form -->

<body>
	<div class="container">        
		<div id="signin-form">
			<form method="post" class="form-signin" enctype="multipart/form-data" id="login-form">
				<h4 class="form-signin-heading">Installation</h4>

				<div class="form-group">
                <input type="text" class="form-control" name="hname" placeholder="Hostname" required />
                </div>

                <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="Username" required />
                </div>

                <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Host Password" />
                </div>

                <div class="form-group">
                <input type="text" class="form-control" name="dbname" placeholder="Database Name" required />
                </div>

				<input type="submit" name="" value="Submit" class="btn butt-edit">
			</form>
        </div>    
    </div>
</body>

<?php include 'footer.php'; ?>
