<?php
    if(isset($_GET['authentication'])) {
        $authStatus = $_GET['authentication'];
    } else {
        $authStatus = '';
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
    </head>
    <body>
        <div>
            <form method="post" action="Backend/user_registration.php">
                <input type="text" name="username"id="username" placeholder="Username"/>
                <input type="password" name="password"id="password" placeholder="Password"/>
                <input type="text" name="Fname"id="Fname" placeholder="First Name"/>
                <input type="text" name="Mname"id="Mname" placeholder="Middle Name"/>
                <input type="text" name="Lname"id="Lname" placeholder="Last Name"/>
                <label for="Account_type">Account type</label>
                <select name="Account_type" id="Account_type">
                    <option value="1">Event Coordinator</option>
                    <option value="2">Musician</option>
                </select>
                <input type="date" name="DOB"id="DOB" placeholder="Date of Birth"/>
                <input type="text" name="Gender"id="Gender" placeholder="Gender"/>
                <input type="email" name="email"id="email" placeholder="Email address"/>
                <input type="text" name="Address"id="Address" placeholder="Address"/>
                <div>
                    <button>Submit</button>
                    <a href="user_login.php" class="nav-link">Already have an account ?</a>
                </div>

            </form>
                
        </div>
    </body>
</html>