<?php
  
 require_once("./config.php");
 // seção 13 aula 62  funcionou ok
 // $sql = new Sql();
 // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 // echo json_encode($usuarios);

// seção 13 aula 63 consulta usuario unico
 $root = new Usuario();
 $root->loadByID(33);
 echo $root;

// secao 13 aula 64 // lista todos os usuarios do banco

//$lista = Usuario::getList();   // metodo estatico não precisa estanciar a classe.
//echo json_encode($lista);

// seção 13 aula 64 // search lista consultando partes do campo
//$search = Usuario::search("lu");
//echo json_encode($search);

// seção 13 aula 64 // consulta e autenricando login e senha
// $usuario = new Usuario();
// $usuario->login("joana","1234");
 //echo $usuario;


// seção 13 aula 65
// chamando funcion insert direto
//$aluno = new Usuario();
//$aluno->setDeslogin("maria da silva");
//$aluno->setDessenha("987654321");
//$aluno->insert();
//echo $aluno;

// chamando pelo  insert constrct
//$aluno = new Usuario("Nazareth","94325");
//$aluno->insert();
//echo $aluno;

// seção 13 aula 66  fazendo UPDATE
//$usuario = new Usuario();
//$usuario->loadById(32);                // carrega o usuario com id 33
//$usuario->update("joao da silva","999999"); // altera login e senha do usuaro com id 33
//echo $usuario;
 
// seção 13 aula 67  deletando um registro de usuario
// $usuario = new Usuario();
// $usuario->loadById(32);
// $usuario->delete();
// echo $usuario;

?>