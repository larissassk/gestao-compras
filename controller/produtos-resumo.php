<?php
// Função pega o arquivo Produtos.class.php
  require_once('model/Produtos.class.php');

  // Recebe os dados e armazena em uma nova variavel 
  $produtos = new Produtos();
    // Atribui uma função nela que sera usada para conectar os dados
  $produtos->resumo();
?>
