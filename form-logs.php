<?php 

$file='function/php/log.txt'; 
$contenu=file_get_contents($file); 
echo "<br><br>Contenu du fichier $file : <br><pre>$contenu</pre>";

?>