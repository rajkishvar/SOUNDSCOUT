<?php 
    require('local_setting.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $fetchQuery = "SELECT * FROM user";

    $result = mysqli_query($conn, $fetchQuery);

    if(mysqli_num_rows($result)>0){
        while($userResult = mysqli_fetch_array($result)){
            if($username == $userResult['username'] && $password == $userResult['password']){
                header('location:../dashboard.php?user_id='.$userResult['user_id']);
                return 0 ;
            }
        }
        header('location:../user_login.php?authentication=1');
    }
?>