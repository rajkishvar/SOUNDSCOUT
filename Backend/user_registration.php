<?php 
    require('./local_setting.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $Gender = $_POST['Gender'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $Address = $_POST['Address'];
    $Account_type = $_POST['Account_type'];

    $createUserData = "INSERT INTO user VALUES('', '$username', '$password', '$email', '$Account_type','')";
    $resultfromUser = mysqli_query($conn, $createUserData);

    $lastInsertedID = mysqli_insert_id($conn);

    if ($Account_type == '2') {
        $createMusician = "INSERT INTO musician VALUES('', '$lastInsertedID','','','','')";
        $resultfromMusician = mysqli_query($conn, $createMusician);
    } 
    else {
        // Handle other account types if needed
    }

    $createUserDetailsData = "INSERT INTO user_details VALUES('$lastInsertedID', '$Fname', '$Mname', '$Lname', '$Gender', '$DOB', '$Address')";
    $resultfromUserDetails = mysqli_query($conn, $createUserDetailsData);
    
    echo 'Data added successfully.';
    header('location:../dashboard.php');
?>
