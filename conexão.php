<?php

/**
 * 
 * Iniciando a conexão com o banco de dados
 * 
 */

 $bdserver = '127.0.0.1';
 $bduser ='sistematarefa';
 $bdpass = 'sistema';
 $bdDB ='notas';

 /**
  * realizando conexão
  */

  $con = mysqli_connect($bdserver,$bduser,$bdpass,$bdDB);

  /**
   * Testanto conexão
   */

   if(mysqli_connect_errno($con)) 
   {
        echo "Problemas para conectar no banco. Verifique os dados e tente novamente!";
   }else
   {
       echo "Conexão bem sucedida!";
   }


   /**
    * gravar no banco 
    */

    /*esse {["string"]} para numeros e "{["string"]}" para strings*/

    function gravar ($con,$notas)
    {
        $gravar = 
        
        "INSERT INTO notas_recebidas(grp)

        VALUES 
            (

                {['grupos']} 
            
            )
         ";
    }