<?php

class User
{
    public $username;
    public $userid;
    public $mail;
    public $pass;

    function __Construct($username, $userid, $email, $pass)
    {
        $this->username = $username;
        $this->userid = $userid;
        $this->email = $email;
        $this->pass = $pass;
    }

    public function login()
    {
        echo "Login ok";
    }

    public function logout()
    {
        echo "Log out ok";
    }
}

// class Admin extends User
// {
//     public function __Construct($username, $userid, $email, $pass, $accessLevel)
//     {
//         parent::__Construct($username, $userid, $email, $pass, $accessLevel);
//         $this->accessLevel = $accessLevel;
//     }
//     public function editUser()
//     {
//         echo "Edit ok";
//     }
// }
?>