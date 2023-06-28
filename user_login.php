<?php 
    if(isset($_GET['authentication'])){
        $authStatus = $_GET['authentication'];
    }
    else {
        $authStatus='';

    }

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN FORM</title>
    </head>
    <body>
        <!-- this is for alert if user entered invalid credentials -->
        <p>
        <?php 
            if($authStatus==1){
        ?>
        <div>
            Invalid Credentials
        </div>
        <?php }?>
            </p>
<!-- ########################################## -->

        <div>
            <form method="POST" action="Backend/authentication.php">
                <input type="text" name="username" id="username" placeholder="Username"/>
                <input type="password" name="password" id="password" placeholder="Password"/>
                <button>LOGIN</button>
                <a href="register.php" class="nav-link">Dont have an account ?</a>
            </form>
        </div>
    </body>
</html>