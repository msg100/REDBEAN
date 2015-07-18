
<?php

/* * ************************************************
 * *********** CRIANDO TABELA REDBEAN **************
 * *************************************************
 * Por Sílvio Giavaroto - Jul 2015
 * Fonte ReadBean
 * **************************************************
 */

require 'rb.php';

R::setup( "mysql:host=localhost;dbname=red", 'root', 'root' ); 

/* ****************************************************
 * ***************** TABELA AUTOR *********************
 * ID    |  NOME                                                            
 * ---------------------------------------------------------------------
 * 1     | JUMENTO                                                             
 * ----------------------------------------------------------------------
 * ****************** TABELA LIVRO *********************
 * ID   | TITULO                                                                 
 * ----------------------------------------------------------------------
 * 1    | XYZ                                                                   
 * ----------------------------------------------------------------------

 */



 $rows = R::getAll( 'SELECT * FROM autor INNER JOIN livro ON autor.id=livro.id ' );
 
foreach( $rows as $val ) {
        echo " Autor Nome : " . $val['nome'];
        echo " Titulo Livro : " .  $val['titulo'] . "<br>";
        
 
    }
    
    // SAIDA Autor Nome : JUMENTO  Titulo Livro : XYZ