<?php
echo "<form method=post action=es.php>";
echo "path: <input type=text name=path></br>";
echo "nome.estensione <input type=text name=nomeFile></br>";
echo "testo <input type=text name=testo></br>";
echo "<input type=submit name=submit value=submit>";
include "lib/creaFile.php";
if(!empty($_POST['path']) ){
 creaFile($_POST['path'], $_POST['nomeFile'], $_POST['testo']);

}





?>