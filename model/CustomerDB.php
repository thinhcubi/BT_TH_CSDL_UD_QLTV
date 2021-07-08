<?php
namespace Model;
use Model\Customer;
use mysql_xdevapi\Exception;
use PDO;
class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
       $this->connection = $connection;
    }
    public function getAll(): array
    {
        $sql = "SELECT * FROM `customers`";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $arr = $stmt->fetchAll();

       $customers = [];
       foreach ($arr as $item){
           $data = [
               'name'=> $item['name'],
               'dateOfBirth' => $item['dateOfBirth'],
               'address' => $item['address'],
               'phone' => $item['phone'],
               'image' => $item['image']
           ];
           $customer = new Customer($data);
           $customer->setId($item['id']);
           $customers[] = $customer;

       } return $customers;
    }
    public function delete($id){
        $sql ="DELETE FROM `customers` WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
       return $stmt->execute();
    }
    public function insert($customer)
    {

            $sql = "INSERT INTO customers(name,dateOfBirth,address,phone,image) VALUES(?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(1,$customer->name);
            $stmt->bindParam(2,$customer->dateOfBirth);
            $stmt->bindParam(3,$customer->address);
            $stmt->bindParam(4,$customer->phone);
            $stmt->bindParam(5,$customer->image);
           return $stmt->execute();
    }
    public function getById($id): array
    {
        $sql = "SELECT * FROM `customers` WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $customers = [];
        foreach ($result as $item){
            $data = [
              'name' => $item['name'],
              'dateOfBirth' => $item['dateOfBirth'],
              'address' => $item['address'],
              'phone' => $item['phone'],
                'image' => $item['image']
            ];
            $customer = new Customer($data);
            $customer->setId($id);
            $customers[] = $customer;
        } return $customers;
    }
    public function update($customer){
        $sql = "UPDATE `customers` SET image=?, name=?,dateOfBirth=?,address=?,phone=? WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$customer->image);
        $stmt->bindParam(2,$customer->name);
        $stmt->bindParam(3,$customer->dateOfBirth);
        $stmt->bindParam(4,$customer->address);
        $stmt->bindParam(5,$customer->phone);
        $stmt->bindParam(6,$customer->id);
        return $stmt->execute();
    }
   public function findEmailPassword($request){
        $sql = "SELECT * FROM `product` WHERE email = ? AND password = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$request['email']);
        $stmt->bindParam(2,$request['password']);
        $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);

   }
}

