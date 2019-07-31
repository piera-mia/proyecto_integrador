<?php
class Usuario {

    private $nombre;
    private $apellido;
    private $sexo;
    private $edad;
    private $peso;
    private $altura;
    private $email;
    private $password;
    private $imagen;
    private $role;

    public function __construct($nombre, $apellido, $sexo, $edad=null, $peso=null, $altura=null, $email, $password, $imagen) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->edad = $edad;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->email = $email;
        $this->password = $password;
        $this->imagen = $imagen;
        $this->role = 1;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
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
    public function getAvatar(){
        return $this->imagen;
    }
    public function setAvatar($imagen){
        $this->imagen = $imagen;
    }
    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }
}
?>
