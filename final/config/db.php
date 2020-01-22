<?php 
    

    //Create connection


    $conn = mysqli_connect('localhost' , 'root' , '1313as13ste13gr' , 'data');

    //check conncetion

    if(mysqli_connect_errno()){

        echo 'failed to connect to Mysql' . mysqli_connect_errno();
    }


?>