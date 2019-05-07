<?php
    include "classUser.php";

    class Admin extends User
    {
        public function __Construct($username, $userid, $email, $pass, $accessLevel)
        {
            parent::__Construct($username, $userid, $email, $pass, $accessLevel);
            $this->accessLevel = $accessLevel;
        }
        public function editUser()
        {
            echo "Edit ok";
        }
    }
?>