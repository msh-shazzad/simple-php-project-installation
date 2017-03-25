<?php
    include 'header.php';
    include 'insert_signup.php';
?>

<body>
    <div class="container">
        <div id="signin-form">   
            <div><p class="para">Now you have to creat an account!</p></div>
            <label class="login-error"><?php if(isset($msg))echo $msg ?></label>

            <form method="post" class="form-signin">

                <h2 class="form-signin-heading">Sign up.</h2>   

                <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="Enter Username" value="" required />
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="umail" placeholder="Enter E-Mail ID" value="" required/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="upass" placeholder="Enter Password" required/>
                </div>

                <div class="clearfix"></div>

                <div class="form-group">
                    <button type="submit" class="btn butt-edit" name="">SIGN UP</button>
                </div>
                
            </form>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>