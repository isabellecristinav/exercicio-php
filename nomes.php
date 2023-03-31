<?php
$clientes = ["Renata", "Alan", "Ingridi", "Sara", "kleber"];
$arquivo = fopen("clientes-novo.txt","a");

$i = 0;
while ($i < count($clientes)) {
    echo $clientes[$i] . "<br>";
    fwrite($arquivo, $clientes[$i] . "\n");
    $i++;
}
fclose($arquivo);
?>