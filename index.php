<?php

require_once("config.php");

//Carregando "1" usuário
//$user = new Usuario();
//$user->loadById(4);
//echo($user);

//LIST
//Carregando lista de usuários

// $lista = Usuario::getList();

// echo(json_encode($lista));


//SELECT
//Carrega uma lista de usuários buscando pelo login

// $search = Usuario::search("us");

// echo(json_encode($search));

//carrega um usuário usando o login e a senha

// $usuario = new Usuario();

// $usuario->login("joaos", "12345678");

// echo($usuario);


//INSERT
// $aluno = new Usuario("victor", "victor123");

// $aluno->insert();

// echo($aluno);


//UPDATE
// $usuario = new Usuario();

// $usuario->loadById(13);

// $usuario->update("VICTOR", "1234#$@%");

// echo($usuario);

//DELETE

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo($usuario);



