<?php
    //include "classUser.php";
    include "classAdmin.php";

    

    $user = new User("ai", "nta", "nta@gmail.com", "123456");
    $admin = new Admin("ba", "bat", "bat@gmail.com", "123456", "root");

    echo "User " .$user->username;
    echo $user->logout();
?>