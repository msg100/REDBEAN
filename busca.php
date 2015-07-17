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





echo "<pre>";
$busca = R::findAll('usuarios');
$sai = R::load('usuarios', $busca[26]->id);
print_r($sai);
echo "</pre>";


/******************************************************************
 * ************************* RESULTADO FINAL **********************
 * RedBeanPHP\OODBBean Object
(
    [properties:protected] => Array
        (
            [id] => 26
            [login] => Jumento
            [senha] => 
            [idade] => 
        )

    [__info:protected] => Array
        (
            [type] => usuarios
            [sys.id] => id
            [sys.orig] => Array
                (
                    [id] => 26
                    [login] => Jumento
                    [senha] => 
                    [idade] => 
                )

            [tainted] => 
            [changed] => 
        )

    [beanHelper:protected] => RedBeanPHP\BeanHelper\SimpleFacadeBeanHelper Object
        (
        )

    [fetchType:protected] => 
    [withSql:protected] => 
    [withParams:protected] => Array
        (
        )

    [aliasName:protected] => 
    [via:protected] => 
    [noLoad:protected] => 
    [all:protected] => 
)
 */

