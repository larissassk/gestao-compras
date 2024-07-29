<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Marca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    
label {
    margin-bottom: 8px;
    color: #333;
    font-weight: bold;
}

input[type="text"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    font-size: 16px;
}

input[type="submit"] {
    padding: 10px;
    background: #738af0; /* Cor do botão */
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

input[type="submit"]:hover {
    background: #4a60d1; /* Efeito hover no botão */
}
</style>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de Marcas</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <!-- Onde o usuario irá inserir uma marca -->
    <section id="produtos">
        <form action="insere-marca.php" method="post">
           <label for="">Descrição:</label>
           <input type="text" name="descricao">
           <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>
</html>
 <!-- ja fiz esse -->