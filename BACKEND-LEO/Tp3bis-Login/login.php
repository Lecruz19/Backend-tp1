<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location:https://plataforma.potrerodigital.org" );
} else {
    header ("location:error.html" );
}

 ?>
