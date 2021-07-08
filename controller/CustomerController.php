<?php

namespace Controller;

use Model\CustomerDB;
use Model\DBConnection;
use Model\Customer;
use function Couchbase\defaultDecoder;


class CustomerController
{
    public CustomerDB $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=Library_mini", "root", "Cubi@2712");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function uploadImage(): string
    {
        $target_dir = "public/image/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        return $target_file;
    }

    public function showList()
    {
        $customers = $this->customerDB->getAll();
        include_once "views/list.php";
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->customerDB->delete($id);
        header('location: index.php');
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'views/add.php';
        } else {
            $errors = [];
            $items = ['name', 'dateOfBirth', 'address', 'phone'];
            foreach ($items as $item) {
                if (empty($_POST[$item])) {
                    $errors[$item] = 'Không được để trống';
                }
            }
            if (empty($errors)) {
                $image = $this->uploadImage();
                $data = [
                    'name' => $_POST['name'],
                    'dateOfBirth' => $_POST['dateOfBirth'],
                    'address' => $_POST['address'],
                    'phone' => $_POST['phone'],
                    'image' => $image,
                ];
                $customer = new Customer($data);
                $this->customerDB->insert($customer);
                header('Location: index.php');
            } else {
                include_once "views/add.php";
            }
        }
    }

    public function edit()
    {
        $id = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $customers = $this->customerDB->getById($id);

            include_once "views/edit.php";
        }
        $image = $this->uploadImage();
        $data = [
            'name' => $_POST['name'],
            'dateOfBirth' => $_POST['dateOfBirth'],
            'address' => $_POST['address'],
            'phone' => $_POST['phone'],
            'image' => $image,
        ];
        $customer = new Customer($data);
        $customer->setId($id);
        $this->customerDB->update($customer);
        header('Location: index.php');
    }
}