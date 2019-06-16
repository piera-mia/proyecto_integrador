<?php
require_once("helpers.php");
session_start();

function validar($datos,$bandera) {
  if ($bandera=="registro") {
    $errores = [];
    if(isset($datos["nombre"])) {
      $nombre = trim($datos["nombre"]);
      if(empty($nombre)) {
        $errores["nombre"]="El campo no puede estar vacío";
      }
    }
    if(isset($datos["sexo"])) {
      if (empty($datos["sexo"])) {
        $errores["sexo"]="Debe seleccionar un sexo";
      }
    }
    if(isset($datos["apellido"])) {
      $apellido = trim($datos["apellido"]);
      if(empty($apellido)) {
        $errores["apellido"]="El campo no puede estar vacío";
      }
    }
    if(isset($datos["edad"])) {
      $edad = trim($datos["edad"]);
      if(!is_numeric($datos["edad"])) {
        $errores["edad"]="El campo debe ser un número";
      }
    }
    if(isset($datos["region"])) {
      $region = trim($datos["region"]);
      if(empty($region)) {
        $errores["region"]="El campo no puede estar vacío";
      }
    }
    if(isset($datos["peso"])) {
      $peso = trim($datos["peso"]);
      if (!empty($peso)&&!is_numeric($peso)) {
        $errores["peso"]="El campo debe ser un número";
      }
    }
    if(isset($datos["altura"])) {
      $altura = trim($datos["altura"]);
      if (!empty($altura)&&!is_numeric($altura)) {
        $errores["altura"]="El campo debe ser un número";
      } elseif ($altura < 100) {
        $errores["altura"]="La altura debe ser al menos 100 cm";
      }
    }
    if(isset($datos["ritmo"])) {
      if ($datos["ritmo"]=="Elige...") {
        $errores["ritmo"]="Debe seleccionar un ritmo";
      }
    }
    if(isset($datos["email"])) {
      $email = trim($datos["email"]);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errores["email"]="El e-mail no es válido";
      }
    }
    if(isset($datos["password"])) {
      $password = trim($datos["password"]);
      if(empty($password)) {
          $errores["password"] = "El password no puede estar vacío";
      } elseif(strlen($password) <6) {
          $errores["password"] = "El password debe tener como mínimo 6 caracteres";
      }
    }
    if(isset($datos["equipo"])) {
      if (empty($datos["equipo"])) {
        $errores["equipo"]="Debe indicar si ya forma parte de Runners Campana";
      }
    }
    if (isset($_FILES)) {
      if ($_FILES["imagen"]["error"]!=0) {
          $errores["imagen"]="No se cargó la imagen";
      }
      $imagen = $_FILES["imagen"]["name"];
      $ext = pathinfo($imagen,PATHINFO_EXTENSION);
      if ($ext !="jpg" && $ext !="png") {
          $errores["imagen"] = "La foto de perfil debe ser PNG o JPG";
      }
    }
    return $errores;
  } elseif ($bandera=="login") {
      $errores = [];
        if (isset($datos["email"])) {
          $email = trim($datos["email"]);
          if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="El e-mail no es válido";
          }
        }
        if (isset($datos["password"])) {
          $password = trim($datos["password"]);
          if (empty($password)) {
              $errores["password"] = "El password no puede estar vacío";
          } elseif (strlen($password)<6) {
              $errores["password"] = "El password debe tener como mínimo 6 caracteres";
          }
        }
        return $errores;
      }
}

function armarperfil($imagen) {
    $ext = pathinfo($imagen["imagen"]["name"],PATHINFO_EXTENSION);
    $archivo = $imagen["imagen"]["tmp_name"];
    $destino = dirname(__DIR__);
    $destino = $destino."/img/fotosUsers/";
    $avatar = uniqid();
    $destino = $destino.$avatar.".".$ext;

    move_uploaded_file($archivo,$destino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}

function armaruser($datos,$imagen) {
    $usuario = [
        "nombre"=>$datos["nombre"],
        "apellido"=>$datos["apellido"],
        "sexo"=>$datos["sexo"],
        "edad"=>$datos["edad"],
        "region"=>$datos["region"],
        "peso"=>$datos["peso"],
        "altura"=>$datos["altura"],
        "ritmo"=>$datos["ritmo"],
        "email"=>$datos["email"],
        "password"=>password_hash($datos["password"],PASSWORD_DEFAULT),
        "equipo"=>$datos["equipo"],
        "imagen"=>$imagen
    ];
    return $usuario;
}

function guardaruser($usuario) {
    $json = json_encode($usuario);
    file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
}

function buscar_email($email) {
  $usuarios = open_json("usuarios.json");
  foreach ($usuarios as $key => $value) {
      if ($email == $value["email"]) {
          return $value;
      }
  }
  return null;
}

function open_json($archivo) {
    $arrayUsers=[];
    if(file_exists($archivo)) {
        $json = file_get_contents($archivo);
        $json = explode(PHP_EOL,$json);
        array_pop($json);
        foreach ($json as $key => $value) {
            $arrayUsers[]=json_decode($value,true);
        }
        return $arrayUsers;
    }
    return null;
}

function set_user($usuario,$datos) {
    $_SESSION["nombre"] = $usuario["nombre"];
    $_SESSION["apellido"]=$usuario["apellido"];
    $_SESSION["sexo"]=$usuario["sexo"];
    $_SESSION["edad"]=$usuario["edad"];
    $_SESSION["region"]=$usuario["region"];
    $_SESSION["peso"]=$usuario["peso"];
    $_SESSION["altura"]=$usuario["altura"];
    $_SESSION["ritmo"]=$usuario["ritmo"];
    $_SESSION["email"]=$usuario["email"];
    $_SESSION["password"]=$usuario["password"];
    $_SESSION["equipo"]=$usuario["equipo"];
    $_SESSION["imagen"]=$usuario["imagen"];
    if(isset($datos["recordar"])){
      $_SESSION["recordar"]=$datos["recordar"];
    }
    if(isset($datos["recordar"])){
        setcookie("email",$datos["email"],time()+3600);
        setcookie("password",$datos["password"],time()+3600);
    }
}

function valid_access() {
    if (isset($_SESSION["email"])) {
        return true;
    } elseif (isset($_COOKIE["email"])) {
        $_SESSION["email"] = $_COOKIE["email"];
        $_SESSION["password"] = $_COOKIE["password"];
        return true;
    } else {
        return false;
    }
}

function modificaruser($user) {
  // Parámetro $usuario nuevo subarray modificado a agregar a la BD
  $arrayUsers = open_json("usuarios.json");
  $index = 0;
  foreach ($arrayUsers as $key => $value) {
      if ($user["email"] == $value["email"]) {
          $index = $key;
      }
  }
  $arrayUsers[$index] = $user;
  $json = json_encode($arrayUsers);
  file_put_contents("usuarios.json",$json);
}

?>
