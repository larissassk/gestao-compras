# Gestão de Compras

## Descrição

O repositório `gestao-compras` é um projeto de sistema de e-commerce desenvolvido para gerenciar categorias, marcas, produtos e pedidos. Este repositório contém todos os arquivos necessários para a implementação das funcionalidades básicas de um sistema de compras.

---

## Funcionalidades

O sistema oferece funcionalidades para gerenciar categorias, marcas, produtos, carrinho de compras e pedidos. Veja as principais funções:

**Gerenciamento de Categorias**  
Organize produtos em grupos para facilitar a navegação e busca. Adicione novas categorias, visualize as existentes e mantenha uma estrutura organizada.

---

**Gerenciamento de Marcas**  
Adicione novas marcas e associe produtos a fabricantes ou empresas. Visualize as marcas cadastradas para manter controle sobre as marcas disponíveis.

<div style="display: flex; gap: 10px;">
  <img src="/img/vid-gif/add-marca.gif" alt="Adicionar Marca" width="200">  
</div>

---

**Gerenciamento de Produtos**  
Adicione produtos com nome, preço e descrição. Visualize todos os produtos disponíveis, modifique informações e remova itens descontinuados. Preços são exibidos e produtos podem ser adicionados ao carrinho para visualização do valor total.

<div style="display: flex; gap: 10px;">
  <img src="/img/vid-gif/add-produtos.gif" alt="Adicionar Produto" width="200" height="200">  
  <img src="img/vid-gif/add-prod-car.gif" alt="Adicionar Produto ao Carrinho" width="200" height="200">
</div>

---

**Carrinho de Compras** 🛒  
Adicione e remova itens do carrinho. Visualize um resumo com a lista de produtos selecionados e o valor total da compra.

<div style="display: flex; gap: 10px;">
  <img src="img/prod-soma-exp.png" alt="Resumo do Carrinho" width="200" height="200">  
  <img src="img/calculo-preco-prod.png" alt="Cálculo de Preço do Produto" width="200" height="200">
</div>

---

**Pedidos** 📦  
Crie novos pedidos após finalizar seleções. Visualize os pedidos realizados para acompanhar status e histórico de compras.

<img src="img/resumo-ped.png" alt="Resumo dos Pedidos" height="200" width="200">

---
## Tecnologias Utilizadas

- `HTML5`
- `JavaScript`
- `CSS3`
- `PHP`
- `MySQL`

---

## Funções e Métodos Usados

<img src="img/nuvem-palavras.png" alt="Nuvem de Palavras" height="300" width="400">  

---

**conexao.php**  
```sh
#Criando conexão com o banco de dados

<?php
// Credenciais de conexão
$user = 'root';          // Nome de usuário
$pass = '';              // Senha
$server = 'localhost';   // Servidor
$db = 'compra_bd';       // Banco de dados

// Conecta ao banco de dados
$mysqli = new mysqli($server, $user, $pass, $db);

// Verifica erros de conexão
if ($mysqli->connect_error) {
    die('Erro de Conexão: ' . $mysqli->connect_error);
}

// Define o charset
$mysqli->set_charset('utf8');
?>

```

1. **`require_once`**  
   Inclui e executa um arquivo PHP uma vez.

2. **`$mysqli->query()`**  
   Executa uma consulta SQL no banco de dados.

3. **`mysqli_fetch_object()`**  
   Recupera uma linha de resultado da consulta SQL como um objeto.

4. **`mysqli_insert_id()`**  
   Retorna o ID do último item inserido com AUTO_INCREMENT.

5. **`session_start()`**  
   Inicia ou retoma uma sessão PHP.

6. **`unset()`**  
   Remove uma variável ou um item específico de uma array.

7. **`header()`**  
   Envia um cabeçalho HTTP para redirecionar o navegador.

8. **`str_replace()`**  
   Substitui caracteres em uma string.

9. **`mysqli_connect()`**  
   Conecta ao banco de dados.

10. **`$mysqli->set_charset('utf8')`**  
    Define o charset para UTF-8.

11. **`$mysqli->connect_error`**  
    Verifica erros de conexão e encerra o script se houver algum.

12. **`$_POST['nome_do_campo']`**  
    Obtém valores enviados por um formulário via método POST.

13. **`mysqli_query($mysqli, $consulta_sql)`**  
    Executa uma consulta SQL no banco de dados, como inserções ou atualizações.

14. **`mysqli_error($mysqli)`**  
    Fornece informações sobre erros durante a execução da consulta SQL.

15. **`mysqli_close($mysqli)`**  
    Fecha a conexão com o banco de dados, liberando recursos.

16. **`@$_GET[]`**  
    Acessa parâmetros passados pela URL, com controle de erro.

17. **`$_SESSION[]`**  
    Armazena dados na sessão do usuário.

---

## Créditos

**Autora:** Larissa Manrique  
**Orientador:** Professor Leonardo Rocha [GitHub](https://github.com/LeonardoRochaMarista)  
**Material disponibilizado por:** Professor Anderson Macedo.
