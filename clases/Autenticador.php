<?php

class Autenticador {

    static public function iniciarSession() {
        if(!isset($_SESSION)) {
            session_start();
        }
    }

    static public function verificarPassword($password,$passwordHash) {
      if ($password==$passwordHash) {
        return true;
      } else {
        return password_verify($password,$passwordHash);
      }
    }

    static public function seteoSesion($usuario) {
      $_SESSION["nombre"] = $usuario["first_name"];
      $_SESSION["apellido"]=$usuario["last_name"];
      $_SESSION["sexo"]=$usuario["gender"];
      $_SESSION["edad"]=$usuario["age"];
      $_SESSION["peso"]=$usuario["weight"];
      $_SESSION["altura"]=$usuario["height"];
      $_SESSION["email"]=$usuario["email"];
      $_SESSION["password"]=$usuario["password"];
      $_SESSION["imagen"]=$usuario["avatar"];
      $_SESSION["role"]=$usuario["role"];
    }

    static public function seteoCookie($user) {
            setcookie("email",$user["email"],time()+3600);
            setcookie("password",$user["password"],time()+3600);
    }

    static public function validarUsuario() {
        if (isset($_SESSION["email"])) {
            return true;
        } elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        } else {
            return false;
        }
    }

}

?>
