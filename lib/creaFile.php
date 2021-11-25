<?php
function creaFile($path, $file, $testo){
if(file_exists($path."/".$file)){
    echo "</br>file gia esistente";
    }else{
        echo "</br>file creato in: ".$path."/".$file;
        $handler = fopen($path."/".$file, 'w');
       if( fwrite($handler, $testo)){
           echo "</br>scritto: ".$testo;
       }else{
           echo "</br>impossibile scrivere: ".$testo;
       }
    }

}

?>