<?php

namespace Model;

class Customer
{
public string $name;
public string $dateOfBirth;
public string $address;
public int $phone;
public int $id;
public mixed $image;

public function __construct($data)
{
   $this->name = $data['name'];
   $this->dateOfBirth = $data['dateOfBirth'];
   $this->address = $data['address'];
   $this->phone = $data['phone'];
   $this->image = $data['image'];
}
public function setId($id){
    $this->id = $id;
}

}