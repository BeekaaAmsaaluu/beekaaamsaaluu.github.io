<?php      
    $host = "sql3.freemysqlhosting.net";  
    $user = "sql3460494";  
    $password = 'v84NdsQ8K9';  
    $db_name = "sql3460494";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  