<?php

    $conn = mysqli_connect('localhost', 'hanna', 'test123', 'opencode_pizza');

    if(!$conn){
        echo 'Connection Error ' .mysql_connect_error();
    }


?>