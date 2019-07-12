<?php
session_start();
include 'conexão.php';




echo '<link rel="stylesheet type="text/css" href="folha.css"/>';



$tarefa = array();
$notas = ($_POST['arquivos']);
$contaPáginas = 1;


echo "<ul id=menu>


<li><a href='template.php'>Voltar</a>
</ul>";


foreach ($notas as $nota)
{       
        if (!empty($nota)) {
        

        
        /*print_r($notas);
        debug_zval_dump($notas);
        var_export($notas);*/
        
        
        $DOMDocument = new DOMDocument;

        $DOMDocument->preserveWhiteSpace = false;
        
        $DOMDocument->load($nota);

        
        $cnf = $DOMDocument->getElementsByTagName('cNF');
        $natop = $DOMDocument->getElementsByTagName('natOp');
        $dhemi = $DOMDocument->getElementsByTagName('dhEmi');
        $xnome = $DOMDocument->getElementsbyTagName('xNome');

        $nomeProd=$DOMDocument->getElementsByTagName('prod');

      


        /**
         * inicializando dom html
         */

        
        
       
        
       
        echo "<table border='1'> 

        
        <tr>
        <th>Nº Danfe</th>
        <th>Natureza da Operação</th>
        <th>Data Entrada</th>
        <th>Empresa</th>
        
        </tr>
                <tr>
                <td>".$cnf->item(0)->nodeValue."</td>
                <td>".$natop->item(0)->nodeValue."</td>
                <td>".$dhemi->item(0)->nodeValue."</td>
                <td>".$xnome->item(0)->nodeValue."</td>
        </tr>";

                foreach ($nomeProd as $produtos)
                {     echo " <tr>
                        <th>Descrição</th>
                        <th>CFOP</th>
                        <th>Unidade</th>
                        <th>Quantidade</th>
                        <th>Valor Unt.</th>
                        <th>Total</th>
                        <th>Grupo</th>
                        </tr>
                        <tr>
                        <td>".$produtos->getElementsByTagName('xProd')->item(0)->nodeValue."</td>
                        <td>".$produtos->getElementsByTagName('CFOP')->item(0)->nodeValue."</td>
                        <td>".$produtos->getElementsByTagName('uCom')->item(0)->nodeValue."</td>
                        <td>".$produtos->getElementsByTagName('qCom')->item(0)->nodeValue."</td>
                        <td>".$produtos->getElementsByTagName('vUnCom')->item(0)->nodeValue."</td>
                        <td>".$produtos->getElementsByTagName('vProd')->item(0)->nodeValue."</td>
                        <td>    
                                <select id='grupos' name='grupo[]' autofocus required multiple>
                                        
                                        <option value='1' selected >Material de limpeza</option>
                                        <option value='2'>Bebidas</option>
                                        <option value='3'>Vinhos</option>
                                        <option value='4'>Insumos</option>
                                        
                                </select>
                                
                        
                        
                        
                        </tr>"; 

                        /**
                         * grava no banco
                         */

                        

                        

                        
                        
                }

                "
                <table>";

                echo "<div id='foot'>
                        <span id='space'> Início do documento nº {$contaPáginas} <span>
                </div>";

                $contaPáginas++;
                
                
               
        
        /*
        $cnf->item(0)->nodeValue,
        $natop->item(0)->nodeValue,
        $dhemi->item(0)->nodeValue;

        */
        //fim condicional
                }else {
                        echo "<div id='main_page'><div id='form'>Algo deu errado - Arquivo não selecionada!<div></div>";
                }

                
               
        

}



echo <<<HTML
<form action="gravarnobanco.php" method='post'>
<select name='grp'>
        <option selected value='1'>Valor 1</option>
        <option value='2'>Valor 2</option>
</select>
        <input type="submit">
 </form>
HTML;








                        









   




