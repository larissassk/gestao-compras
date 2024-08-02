# Gestão de Compras

## Descrição

O repositório `gestao-compras` é um projeto de sistema de e-commerce desenvolvido para gerenciar categorias, marcas, produtos e pedidos. Este repositório contém todos os arquivos necessários para a implementação das funcionalidades básicas de um sistema de compras.

## Funcionalidades

O sistema oferece funcionalidades para gerenciar categorias, marcas, produtos, carrinho de compras e pedidos. Veja as principais funções:

**Gerenciamento de Categorias**  
Organize produtos em grupos para facilitar a navegação e busca. Adicione novas categorias, visualize as existentes e mantenha uma estrutura organizada.



**Gerenciamento de Marcas**  
Adicione novas marcas e associe produtos a fabricantes ou empresas. Visualize as marcas cadastradas para manter controle sobre as marcas disponíveis.
exemplos\vid-gif\add-marca.mp4
![mp4](/img/vid-gif/add-marca.mp4)


**Gerenciamento de Produtos**  
Adicione produtos com nome, preço e descrição. Visualize todos os produtos disponíveis, modifique informações e remova itens descontinuados. Preços são exibidos e produtos podem ser adicionados ao carrinho para visualização do valor total.
![img](/img/vid-gif/add-produtos.mp4) 
![img](/img/vid-gif/add-prod-car.mp4)

**Carrinho de Compras**  
Adicione e remova itens do carrinho. Visualize um resumo com a lista de produtos selecionados e o valor total da compra.
IMAGENS PARA INSERIR
![img](/img/prod-soma-exp.png)
![img](/img/n-d-produto.png)
![img](/img/calculo-preco-prod.png)

**Pedidos**  
Crie novos pedidos após finalizar seleções. Visualize os pedidos realizados para acompanhar status e histórico de compras.
![img](/img/resumo-ped.png)

## Tecnologias 

- HTML5
- CSS3
- PHP
- JavaScript

## Inclusão de Código PHP

### `require_once('caminho/do/arquivo.php');`

Inclui e executa o código de um arquivo PHP uma única vez, garantindo que não seja incluído novamente.

## Funções e Métodos Usados

1. **`require_once`**  
   Inclui e executa um arquivo PHP uma vez.
   ![img](/img/liga-paginas.png)

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
      add imagem conexao-bd.png
      ![img](/img/conexao-bd.png)

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

## Créditos

**Autora:** Larissa Manrique  
**Orientador:** Professor Leonardo Rocha [GitHub](https://github.com/LeonardoRochaMarista)
**Material disponibilizado por:** Professor Anderson Macedo.
