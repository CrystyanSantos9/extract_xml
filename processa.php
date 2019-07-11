<?php





echo '<link rel="stylesheet type="text/css" href="folha.css"/>';




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
                </tr>
                <tr>
                <td>".$produtos->getElementsByTagName('xProd')->item(0)->nodeValue."</td>
                <td>".$produtos->getElementsByTagName('CFOP')->item(0)->nodeValue."</td>
                <td>".$produtos->getElementsByTagName('uCom')->item(0)->nodeValue."</td>
                <td>".$produtos->getElementsByTagName('qCom')->item(0)->nodeValue."</td>
                <td>".$produtos->getElementsByTagName('vUnCom')->item(0)->nodeValue."</td>
                <td>".$produtos->getElementsByTagName('vProd')->item(0)->nodeValue."</td>
                       
                </tr>"; 

               
                
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




?>
   




