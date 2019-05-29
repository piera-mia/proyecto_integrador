<?php
// require_once("helpers.php");
function validar($datos){
    $errores = [];

    if(isset($datos["nombre"])){
        $nombre = trim($datos["nombre"]);
        if(empty($nombre)){
            $errores["nombre"]="El campo no puede estar vacio";
        }
    }
    if(isset($datos["email"])){
        $email = trim($datos["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errores["email"]="El email no es válido";
        }
    }
    $password = trim($datos["password"]);
    if(isset($datos["password"])){
        if(empty($password)){
            $errores["password"] = "El password no puede estar vacio";
        }elseif(strlen($password)<6){
            $errores["password"]="El password debe tener mínimo 6 cacteres";
        }
    }
    if(isset($datos["repassword"])){
        $repassword = trim($datos["repassword"]);
        if(empty($repassword)){
            $errores["repassword"]= "El campo no debe estar vacio";
        }
        if($password != $repassword){
            $errores["repassword"]= "Las contraseñas deben coincidir";
        }
    }

    return $errores;
}


 ?>
