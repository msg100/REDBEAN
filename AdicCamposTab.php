<?php

/* * ************************************************
 * *********** CRIANDO TABELA REDBEAN **************
 * *************************************************
 * Por Sílvio Giavaroto - Jul 2015
 * Fonte ReadBean
 * ************************************************
 */


// Invocando arquivo de configuração RB.PHP
require 'rb.php';

// Parâmetros de configuração Base MySQL
R::setup("mysql:host=localhost;dbname=red", 'root', '');

// Criando uma tabela chamada usuários em uma base existente chamada red
$usuarios = R::dispense('usuarios');

// Criando os campos e populando com dados
$usuarios->login = 'admin';
$usuarios->senha = md5(123);  // criando uma senha criptografada com hash MD5
// acrescentando mais um campo na tabela
$usuarios->idade = 46;
// Armazenando resultado
R::store($usuarios);

/***************************************************
 * ************** RESULTADO FINAL ******************
 * +-----------------------------------------------+
 * |id | login  | senha                            +
 * +-----------------------------------------------+
 * + 1 | admin  | 202cb962ac59075b964b07152d234b70 +
 * +-----------------------------------------------+
 */
