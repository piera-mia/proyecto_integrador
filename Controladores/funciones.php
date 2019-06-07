<?php
require_once("helpers.php");
function validar($datos){
    $errores = [];

    if(isset($datos["nombre"])){
        $nombre = trim($datos["nombre"]);
        if(empty($nombre)){
            $errores["nombre"]="El campo no puede estar vacio";
          }
        }
    if(isset($datos["apellido"])){
        $apellido = trim($datos["apellido"]);
        if(empty($apellido)){
          $errores["apellido"]="El campo no puede estar vacio";
          }
        }
    if(isset($datos["edad"])) {
        $edad = trim($datos["edad"]);
        if(empty($edad)){
          $errores["edad"]="El campo no puede estar vacio";
            }
        elseif (is_numeric($datos["edad"])) {
          $errores["edad"]="El campo debe ser un número";
            }
          }
    if(isset($datos["region"])){
        $region = trim($datos["region"]);
        if(empty($region)){
          $errores["region"]="El campo no puede estar vacio";
            }
          }
    if(isset($datos["peso"])) {
        $peso = trim($datos["peso"]);
        if(empty($peso)){
          $errores["peso"]="El campo no puede estar vacio";
            }
        elseif (is_numeric($datos["peso"])) {
          $errores["peso"]="El campo debe ser un número";
              }
            }
    if(isset($datos["altura"])) {
        $altura = trim($datos["altura"]);
        if(empty($altura)){
        $errores["altura"]="El campo no puede estar vacio";
            }
        elseif (is_numeric($datos["altura"])) {
          $errores["altura"]="El campo debe ser un número";
              }
            }
    if(isset($datos["email"])){
        $email = trim($datos["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errores["email"]="El email no es válido";
        }
    }
    if(isset($datos["password"])){
        $password = trim($datos["password"]);
        if(empty($password)){
            $errores["password"] = "El password no puede estar vacio";
        }elseif(strlen($password)<6){
            $errores["password"]="El password debe tener mínimo 6 cacteres";
        }
    }
    return $errores;
}















 ?>
