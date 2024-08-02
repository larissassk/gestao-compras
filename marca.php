<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Marcas</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: Tahoma, sans-serif;
    box-sizing: border-box;
}

body {
    background-color: #e0e0e0;
}

.center {
    max-width: 1000px;
    margin: 0 auto;
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
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    margin: 20px auto;
    max-width: 600px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-weight: bold;
}

input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #cccccc;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px;
    font-size: 16px;
    color: #ffffff;
    background-color: #4a60d1;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3a4a9e;
}

</style>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de Marcas</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-marca.php" method="post">
           <label for="descricao">Descrição:</label>
           <input type="text" id="descricao" name="descricao" required>
           <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>
</html>
