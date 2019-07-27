<?php
class User{
    private $name;
    private $surname;
    private $gender;
    private $age;
    private $weight;
    private $height;
    private $avatar;
    private $email;
    private $password;
    public function __construct($name,$surname,$gender=null, $age=null,$weight=null,$height=null,$avatar=null,$email,$password){
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->weight = $weight;
        $this->height = $height;
        $this->avatar = $avatar;
        $this->email = $email;
        $this->password = $password;
    }
    public function getName(){
        return $this->name;
    }
    public function setNombre($nombre){
        $this->name = $name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setSurname($surname){
        $this->surname = $surname;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function getAvatar(){
       return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }

}

 ?>
