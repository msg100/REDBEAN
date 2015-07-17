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




$dados = R::getRow("SELECT *FROM usuarios WHERE id='2'");
print_r($dados);


/******************************************************************
 * ************************* RESULTADO FINAL **********************
 * Array ( [id] => 2 [login] => admin [senha] => 202cb962ac59075b964b07152d234b70 [idade] => 46 ) 
 */

