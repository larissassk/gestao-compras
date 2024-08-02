<?php
// Inclusão do arquivo de Conexão
include('controller/conexao.php');

// Recebe valor inserido 
$descricao = $_POST['descricao']; 

echo "<h3>Descrição da Marca: $descricao</h3><br><br>";

// Insere nova marca no bd
$cad_categoria = "INSERT INTO marca(DESCRICAO) VALUES ('$descricao')";

// Execução da consulta e mensagem de sucesso ou erro
if(mysqli_query($mysqli, $cad_categoria)){
    echo "<h1>Marca $descricao cadastrada com sucesso!</h1><br>";
}else{
    echo "Erro ao cadastrar a marca: " . mysqli_error($mysqli);
}
// Fecha conexão com o bd
mysqli_close($mysqli);
?>

