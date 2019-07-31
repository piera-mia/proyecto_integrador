<?php
class Validador {

    public function validacionUsuario($usuario) {
        $errores=array();
        $nombre = trim($usuario->getNombre());
        if(isset($nombre)) {
            if(empty($nombre)) {
                $errores["nombre"]= "El campo nombre no puede estar vacío";
            }
        }
        $apellido = trim($usuario->getApellido());
        if(isset($apellido)) {
          if(empty($apellido)) {
              $errores["apellido"]= "El campo apellido no puede estar vacío";
          }
        }
        $sexo = trim($usuario->getSexo());
        if(isset($sexo)) {
          if(empty($sexo)) {
              $errores["sexo"]= "Debe seleccionar un sexo";
          }
        }
        $edad = trim($usuario->getEdad());
        if(isset($edad)) {
          if(!empty($edad)&&!is_numeric($edad)) {
              $errores["edad"]= "El campo edad debe ser un número";
          }
        }
        $peso = trim($usuario->getPeso());
        if(isset($peso)) {
          if(!empty($peso)&&!is_numeric($peso)) {
              $errores["peso"]= "El campo peso debe ser un número";
          }
        }
        $altura = trim($usuario->getAltura());
        if(isset($altura)) {
          if(!empty($altura)&&!is_numeric($altura)) {
              $errores["altura"]= "El campo altura debe ser un número";
          }
        }
        $email = trim($usuario->getEmail());
        if(isset($email)) {
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="El e-mail no es válido";
          }
        }
        $password = trim($usuario->getPassword());
        if(isset($password)) {
          if(empty($password)) {
              $errores["password"] = "El password no puede estar vacío";
          } elseif(strlen($password) <6) {
              $errores["password"] = "El password debe tener como mínimo 6 caracteres";
          }
        }

        if($usuario->getAvatar()!=null) {
            if($_FILES["imagen"]["error"]!=0){
                $errores["imagen"]="Debe cargar su foto";
            } else {
                $nombre = $_FILES["imagen"]["name"];
                $ext = pathinfo($nombre,PATHINFO_EXTENSION);
                if ($ext !="jpg" && $ext !="png") {
                    $errores["imagen"] = "La foto de perfil debe ser PNG o JPG";
                }
            }
        }
        return $errores;
    }


    //Método creado para validar el login del usuario
    public function validacionLogin($usuario) {
        $errores=array();
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="El e-mail no es válido";
        }

        $password= trim($usuario->getPassword());
        if(empty($password)) {
            $errores["password"]= "El password no puede estar vacío";
        } elseif (strlen($password)<6) {
            $errores["password"]="El password debe tener como mínimo 6 caracteres";
        }
        return $errores;
    }


    //Método para validar si el usuario desea recuperar su contraseña
    public function validacionOlvide($usuario) {
        $errores=array();
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="El e-mail no es válido";
        }
        $password= trim($usuario->getPassword());
        if(empty($password)){
            $errores["password"]= "El password no puede estar vacío";
        } elseif (strlen($password)<6) {
            $errores["password"]="El password debe tener como mínimo 6 caracteres";
        }
        return $errores;
    }
}
?>
