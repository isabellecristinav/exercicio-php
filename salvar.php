<?php 
$nome = $_POST ["nome"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$bairro = $_POST["bairro"];

echo "$nome - $cidade";
$arquivo = fopen("clientes.txt","a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $email . "\t");
fwrite($arquivo, $rg . "\t");
fwrite($arquivo, $cpf . "\t");
fwrite($arquivo, $bairro . "\n");
fclose($arquivo);
header("location:cadastro.php");

?>