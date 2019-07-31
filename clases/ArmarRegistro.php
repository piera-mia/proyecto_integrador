<?php
class ArmarRegistro {

    public function armarAvatar($imagen) {
        $nombre = $imagen["imagen"]["name"];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen["imagen"]["tmp_name"];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/img/fotosUsers/";
        $avatar = uniqid();
        $archivoDestino = $archivoDestino.$avatar;
        $archivoDestino = $archivoDestino.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $avatar = $avatar.".".$ext;
        return $avatar;
    }

    public function armarUsuario($registro,$avatar) {
        $usuario = [
            "nombre"=>$registro->getNombre(),
            "apellido"=>$registro->getApellido(),
            "sexo"=>$registro->getSexo(),
            "edad"=>$registro->getEdad(),
            "peso"=>$registro->getPeso(),
            "email"=>$registro->getEmail(),
            "password"=> Encriptar::hashPassword($registro->getPassword()),
            "imagen"=>$avatar,
            "role"=>1
        ];
        return $usuario;
    }

  }
?>
