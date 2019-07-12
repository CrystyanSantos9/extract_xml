<?php

function selectfile($dirname){

$arrayfiles = array();

if(file_exists($dirname)){

    $handle = opendir($dirname);
    while (false !== ($file = readdir($handle))) {

      if(is_file($dirname.$file)){

            array_push($arrayfiles,$file);

        }

    }

    $handle = closedir($handle);

}

sort($arrayfiles); //ordina in base al nome del file

return $arrayfiles[count($arrayfiles)-1];

}