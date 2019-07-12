<?php

$valor = $_POST['grp'];

for ($i=0;$i<count($valor);$i++)
{
   echo "<br> Cerveja " . $i . ": " . $valor[$i];
}
?>