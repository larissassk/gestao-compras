<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedido</title>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <style>
    * {
    margin: 0;
    padding: 0;
    font-family: Tahoma, sans-serif;
    box-sizing: border-box;
}

body {
    background-color: #f4f4f4;
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
    color: #ffffff;
}

header h1 {
    font-size: 20px;
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
    max-width: 1000px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section#produtos h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
    font-size: 24px;
}

  </style>
  <body>
    <header>
      <div class="center">
      <a href="index.php"  target="_self"> Voltar</a>

      <h1>E-commerce - PW</h1>
      </div>
    </header>
    <h3 style="text-align: center; color: #333">Resumo do Pedido</h3>
    <section id="produtos">
        <div class="center">
          <div>
            <?php require_once('controller/produtos-resumo.php'); ?>
          </div>
        </div>
    </section>

  </body>
</html>
