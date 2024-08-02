<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
 
<body>
    <header>
        <div class="center">
        <a href="index.php"  target="_self">Voltar</a>
            <h1>Cadastro de Categorias</h1>
            <a href="categoria.php">Todas categorias</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-categoria.php" method="post">
           <label for="">Descrição:</label>
           <input type="text" name="descricao">
           <input type="submit" value="Cadastrar">

        </form>
    </section>
</body>
 
</html>