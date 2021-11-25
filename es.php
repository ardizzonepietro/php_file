<?php
echo "<form method=post action=es.php>";
echo "path: <input type=text name=path></br>";
echo "nome.estensione <input type=text name=nomeFile></br>";
echo "<input type=submit name=submit value=submit>";

if(!empty($_POST['path']) ){
 
if(file_exists($_POST['path']."/".$_POST['nomeFile'])){
echo "</br>file gia esistente";
}else{
    echo "</br>file creato in: ".$_POST['path']."/".$_POST['nomeFile'];
    fopen($_POST['path']."/".$_POST['nomeFile'], 'w');
}
}





?>