<?php

namespace Services;

require_once __DIR__."/../vendor/autoload.php";

use Model\CustomerDB;
use Model\DBConnection;


class AuthService
{
    public CustomerDB $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product_2","root","Cubi@2712");
        $this->customerDB = new CustomerDB($connection->connect());
    }
    public function checkLogin($request) : bool
    {
        $user = $this->customerDB->findEmailPassword($request);
        if ($user){
            session_start();
            $_SESSION['userLogin'] = $user;
            header('Location: ../index.php');
        }
        return false;
    }
}