<?php
class Query {
    // static public function listado($pdo, $tabla) {
    //     //Aquí ejecuto la consulta deseada, para mostrar campos del usuario
    //     $sql = "SELECT $tabla.id, $tabla.first_name, $tabla.last_name, $tabla.email FROM $tabla";
    //     //Aquí ejecuto el prepare de la sentencia, noten que lo estoy ejecutando de forma directa haciendo uso del método query de la clase PDO, es para que vean que se puede trabajar de diferentes formas
    //     $consulta = $pdo->query($sql);
    //     //Aquí ejecuto la consulta que tengo preparada, para así traer todos los usuarios registrados y almacenarlos en la variable $listado, la cual retorno
    //     $listado = $consulta->fetchall(PDO::FETCH_ASSOC);
    //     return $listado;
    // }

    static public function mostrarUsuario($pdo,$tabla,$idUsuario) {
        //En esta otra consulta hago uso del statement que ofrece PDO
        $sql = "SELECT $tabla.id, $tabla.first_name, $tabla.last_name, $tabla.email, $tabla.avatar, $tabla.role FROM $tabla WHERE $tabla.id = '$idUsuario'";
        //Aquí hago el prepare de los datos de mi consulta (Query)
        $query = $pdo->prepare($sql);
        //Aquí ejecuto la consulta
        $query->execute();
        //Aquí hago uso del método fetchAll, pero también puedo usar sólo el método fetch, ya que sólo voy a buscar al usuario que cumpla con la condificón indicada
        $usuarioEncontrado=$query->fetchAll(PDO::FETCH_ASSOC);
        //Retorno el array sólo del usuario encontrado
        return $usuarioEncontrado;
    }

    static public function borrarUsuario($pdo,$tabla,$idUsuario) {
        //Aquí armo el query que deseo, en este caso es el borrado de un usuario específico
        $sql= "DELETE FROM $tabla WHERE $tabla.id=:id";
        //Aquí preparo la consulta, tal como me lo indica la secuencia de trabajar con PDO
        $query = $pdo->prepare($sql);
        //Aquí ejecuto el Bindeo de Parámetros - usando el bindValue
        $query->bindValue(':id',$idUsuario);
        //Aquí ejecuto el borrado del usuario
        $query->execute();
    }

    static public function usuarioModificar($pdo,$tabla,$idUsuario) {
        $sql = "SELECT $tabla.id, $tabla.first_name, $tabla.last_name, $tabla.email, $tabla.role FROM $tabla WHERE $tabla.id = '$idUsuario'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $usuarioModificar=$query->fetch(PDO::FETCH_ASSOC);
        return $usuarioModificar;
    }

    static public function carrerasObjetivo($pdo,$email) {
        $sql = "SELECT id FROM users WHERE email='$email'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $idUsuario=$query->fetch(PDO::FETCH_ASSOC);
        $id=$idUsuario['id'];
        $sql = "SELECT goals.title, goals.goal_date FROM goals, users_goals, users WHERE users_goals.user_id=users.id AND users_goals.goal_id=goals.id AND users.id=$id ORDER BY goals.goal_date ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $carrerasObjetivo=$query->fetchAll(PDO::FETCH_ASSOC);
        return $carrerasObjetivo;
    }

    static public function listado($pdo, $tabla) {
        $sql = "SELECT * FROM $tabla";
        $consulta = $pdo->query($sql);
        $listado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $listado;
    }

    static public function sesionesUsuario($pdo,$email) {
        $sql = "SELECT id FROM users WHERE email='$email'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $idUsuario=$query->fetch(PDO::FETCH_ASSOC);
        $id=$idUsuario['id'];
        $sql = "SELECT training_sessions.description, training_sessions.date FROM training_sessions, users_training_sessions, users WHERE users_training_sessions.user_id=users.id AND users_training_sessions.training_session_id=training_sessions.id AND users.id='$id' ORDER BY training_sessions.date ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $sesionesUsuario=$query->fetchAll(PDO::FETCH_ASSOC);
        return $sesionesUsuario;
    }
}

?>
