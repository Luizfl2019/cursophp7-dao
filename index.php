<?php
  
 require_once("./config.php");
 // seção 13 aula 62  funcionou ok
 // $sql = new Sql();
 // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 // echo json_encode($usuarios);

// seção 13 aula 63 consulta usuario unico
// $root = new Usuario();
// $root->loadByID(1);
// echo $root;

// secao 13 aula 64 // lista todos os usuarios do banco

//$lista = Usuario::getList();   // metodo estatico não precisa estanciar a classe.
//echo json_encode($lista);

// sessão 13 aula 64 // search lista consultando partes do campo
//$search = Usuario::search("lu");
//echo json_encode($search);

// sessão 13 aula 64 // consulta e autenricando login e senha
 $usuario = new Usuario();
 $usuario->login("joana","1234");
 echo $usuario;
?>