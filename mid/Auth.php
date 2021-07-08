<?php

namespace Mid;

class Auth
{
    public function __construct()
    {
    }
    public function isLogin(){
        if(!isset($_SESSION['userLogin'])){
            header('Location: views/login.php');
        }
    }
}
