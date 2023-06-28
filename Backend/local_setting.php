<?php  
    $host='localhost';
    $username='root';
    $password='';
    $db_name='soundscout';
    $conn = mysqli_connect($host,$username,$password);

    $db_config = mysqli_select_db($conn, $db_name);

?>