<?php
  
 require_once("./config.php");
 // $sql = new Sql();
   // seção 13 aula 62
//  $usuarios = $sql->select("SELECT * FROM //tb_usuarios");
 // echo json_encode($usuarios);

// seção 13 aula 63
 $root = new Usuario();
 $root->loadByID(3);
 $root;


?>