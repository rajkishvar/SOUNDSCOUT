<?php 
    require('local_setting.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $Gender = $_POST['Gender'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $Address = $_POST['Address'];

    $createUserData ="INSERT INTO user VALUES('','$username','$password','$email')";
    $resultfromUser = mysqli_query($conn, $createUserData);
    
    $lastinsertedID = mysqli_insert_id($conn);

    $createUserDetailsData = "INSERT INTO user_details VALUES('$lastinsertedID','$Fname','$Mname','$Lname','$Gender','$DOB','$Address')";
    $resultfromUserDetails=mysqli_query($conn, $createUserDetailsData);

    header('location:../dashboard.php?user_id='.$lastinsertedID);


?>