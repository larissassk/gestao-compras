<?php
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Tahoma, sans-serif;
}

body {
    background-color: #f4f4f4;
    color: #333;
}
header {
    width: 100%;
    height: 60px;
    background: #4a60d1;
    border-bottom: 1px solid #e0e0e0;
}

header h1 {
    font-size: 20px;
    float: left;
    color: #ffffff;
    line-height: 60px;
    padding-left: 20px;
}

header a {
    float: right;
    text-decoration: none;
    color: #ffffff;
    line-height: 60px;
    padding: 0 20px;
    border-radius: 4px;
}

header a:hover {
    opacity: 0.7;
}


section#produtos {
    background: #fff;
    padding: 20px;
    margin: 20px auto;
    border-radius: 8px;
    width: calc(100% - 40px); /* Ajusta a largura para a margem */
    max-width: 800px; /* Limita a largura máxima */
}

form {
    display: flex;
    flex-direction: column;
}

form input[type="text"],
form input[type="number"],
form select {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form input[type="submit"] {
    background-color: #4a60d1;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #3a50a1;
}

</style>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de produtos</h1>
            <a href="index.php"  target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-produto.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Descrição: <input type="text" name="descricao"><br>
            estoque: <input type="number" name="estoque"><br>
            preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01"><br>
 
            Categoria:
            <select name="seleciona_categoria" id="">
                <option value="">Selecione</option>
                <?php
                $resultado_categoria = "SELECT * FROM `categoria`";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while ($row_categorias = mysqli_fetch_assoc($resultcategoria)) {
                ?>
 
                    <option value=" <?php echo $row_categorias['IDCATEGORIA']; ?> "><?php echo $row_categorias['DESCRICAO']; ?></option>
 
                <?php
                }
                ?>
            </select><br>
 
            Marca:
            <select name="seleciona_marca" id="">
                <option value="">Selecione</option>
                <?php
                $resultado_marca = "SELECT * FROM `marca`";
                $resultmarca = mysqli_query($mysqli, $resultado_marca);
                while ($row_marcas = mysqli_fetch_assoc($resultmarca)) {
                ?>
 
                    <option value=" <?php echo $row_marcas['IDMARCA']; ?> "><?php echo $row_marcas['DESCRICAO']; ?></option>
 
                <?php
                }
                ?>
            </select>
 
            <br><br>
 
            <input type="submit" value="cadastrar">
 
        </form>
    </section>
</body>
 
</html>