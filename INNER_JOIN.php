
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'rb.php';

R::setup( "mysql:host=localhost;dbname=red", 'root', 'root' ); 

/* ****************************************************
 * ***************** TABELA AUTOR *********************
 * ID    |  NOME                                                                *
 * ---------------------------------------------------------------------
 * 1     | JUMENTO                                                             *
 * ----------------------------------------------------------------------
 * ****************** TABELA LIVRO *********************
 * ID   | TITULO                                                                 *
 * ----------------------------------------------------------------------
 * 1    | XYZ                                                                      *
 * -----------------------------------------------------------------------

 */



 $rows = R::getAll( 'SELECT * FROM autor INNER JOIN livro ON autor.id=livro.id ' );
 
foreach( $rows as $val ) {
        echo " Autor Nome : " . $val['nome'];
        echo " Titulo Livro : " .  $val['titulo'] . "<br>";
        
 
    }
    
    // SAIDA Autor Nome : JUMENTO  Titulo Livro : XYZ