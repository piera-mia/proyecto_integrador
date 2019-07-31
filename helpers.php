<?php

function dd($valor){
    echo "<pre>";
    var_dump($valor);
    echo "</pre>";
    exit;
}

function persistir($input) {
  if(isset($_SESSION[$input])) {
     return $_SESSION[$input];
  } elseif(isset($_POST[$input])) {
       return $_POST[$input];
    }
}

function inputUsuario($campo) {
    if(isset($_POST[$campo])) {
        return $_POST[$campo];
    }
}

function redirect($destino){
    header("location:".$destino);
    exit;
}

?>
