<?php

class BaseMYSQL extends BaseDatos {

    static public function conexion($host,$db_nombre,$usuario,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$usuario,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errores) {
            echo "No se pudo establecer la conexión a la base de datos MySQL ". $errores->getmessage();
            exit;
        }
    }

    static public function buscarPorEmail($email,$pdo,$tabla) {
        //Aquí hago la sentencia select, para buscar el email, estoy usando bindeo de parámetros por value
        $sql = "SELECT * FROM $tabla WHERE email = :email";
        // Aquí ejecuto el prepare de los datos
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    static public function guardarUsuario($pdo,$usuario,$tabla,$avatar) {
        $sql = "INSERT INTO $tabla (id, created_at, updated_at, first_name, last_name, gender, age, weight, height, email, password, avatar, role) VALUES (default, default, default, :first_name, :last_name, :gender, :age, :weight, :height, :email, :password, :avatar, :role)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':first_name',$usuario->getNombre());
        $query->bindValue(':last_name',$usuario->getApellido());
        $query->bindValue(':gender',$usuario->getSexo());
        $query->bindValue(':age',$usuario->getEdad());
        $query->bindValue(':weight',$usuario->getPeso());
        $query->bindValue(':height',$usuario->getAltura());
        $query->bindValue(':email',$usuario->getEmail());
        $query->bindValue(':password',Encriptar::hashPassword($usuario->getPassword()));
        $query->bindValue(':avatar',$avatar);
        $query->bindValue('role',1);
        $query->execute();
    }

    public function leer() {
        //A futuro trabajaremos en esto
    }
    public function actualizar() {
        //A futuro trabajaremos en esto
    }
    public function borrar() {
        //A futuro trabajaremos en esto
    }
    public function guardar($usuario) {
        //Este fue el método usado para json
    }

}
