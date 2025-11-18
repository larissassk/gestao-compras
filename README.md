# 🛒 Gestão de Compras (E-commerce PHP/MySQL)

## 📋 Descrição e Arquitetura

O **`gestao-compras`** é um sistema de **e-commerce monolítico** construído em **PHP Procedural** e **MySQL**. O projeto demonstra a implementação de um **CRUD (Create, Read, Update, Delete)** completo para gerenciar:

* **Produtos e Catálogo** (Categorias e Marcas).
* **Carrinho de Compras** (Persistência via Sessões PHP).
* **Pedidos** (Histórico de compras).

Este repositório serve como prova de conceito para o desenvolvimento de *backend* utilizando uma stack tradicional de código procedural e banco de dados relacional.

---

## ✨ Demonstração e Funcionalidades (CRUD)

### 1. Gestão de Catálogo (Categorias e Marcas)
Demonstra a lógica básica de inserção de dados no banco de dados.

| Adicionar Marca |
| :---: |
| <img src="/img/vid-gif/add-marca.gif" alt="Adicionar Marca" width="450"> |

### 2. Gerenciamento de Produtos
Funcionalidade completa de criação, visualização e adição de produtos ao carrinho.

| Adicionar Produto | Adicionar ao Carrinho |
| :---: | :---: |
| <img src="/img/vid-gif/add-produtos.gif" alt="Adicionar Produto" width="350"> | <img src="img/vid-gif/add-prod-car.gif" alt="Adicionar Produto ao Carrinho" width="350"> |

### 3. Carrinho de Compras e Pedidos 🛒📦
Controle de estoque temporário (carrinho) e finalização de compras (pedidos).

| Resumo do Carrinho e Cálculo | Resumo dos Pedidos |
| :---: | :---: |
| <img src="img/prod-soma-exp.png" alt="Resumo do Carrinho" width="350"> <br><img src="img/calculo-preco-prod.png" alt="Cálculo de Preço do Produto" width="350"> | <img src="img/resumo-ped.png" alt="Resumo dos Pedidos" width="350"> |

---

## ⚙️ Stack PHP/MySQL e Competências

O projeto destaca habilidades de *backend* e manipulação de dados:


### Competências em PHP e MySQLi:

* **Manipulação de Banco de Dados:** Uso de `$mysqli->query()`, `mysqli_fetch_object()` e `mysqli_insert_id()` para consultas e inserções.
* **Controle de Sessão:** Implementação de `session_start()` e `$_SESSION[]` para persistência de dados do carrinho.
* **Tratamento de Dados:** Uso de `$_POST` e `@$_GET` para obter dados de formulários e URLs, com controle de erro básico.
* **Gerenciamento de Código:** Uso de `require_once` para inclusão modular de arquivos.
* **Controle de Conexão:** Uso de `mysqli_connect()`, `$mysqli->connect_error` e `mysqli_close()` para garantir a segurança e estabilidade da conexão.

### Tecnologias Utilizadas

* **Backend:** PHP
* **Banco de Dados:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript
* **Design:** CSS Básico

---
## Créditos

**Autora:** Larissa Manrique  
**Orientador:** Professor Leonardo Rocha [GitHub](https://github.com/LeonardoRochaMarista)  
**Material disponibilizado por:** Professor Anderson Macedo.

---

## 🔨 Instalação e Configuração

Para rodar o projeto localmente, é necessário ter um ambiente LAMP/XAMPP configurado.

### 1. Configuração do Banco de Dados

* Crie um banco de dados chamado `compra_bd` no seu ambiente MySQL.
* Importe o esquema de tabelas (`.sql`) do projeto, se disponível.

### 2. Conexão (`conexao.php`)

Verifique se o arquivo `conexao.php` tem as credenciais corretas para o seu ambiente local (`$user`, `$pass`).

```php
<?php
// Credenciais de conexão
$user = 'root';
$pass = '';
$server = 'localhost';
$db = 'compra_bd';

// Conecta ao banco de dados
$mysqli = new mysqli($server, $user, $pass, $db);

// Verifica erros de conexão
if ($mysqli->connect_error) {
    die('Erro de Conexão: ' . $mysqli->connect_error);
}

// Define o charset
$mysqli->set_charset('utf8');
?>
