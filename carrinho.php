<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
      <a href="index.php"  target="_self">Voltar</a>
        <h1>PW - Carrinho</h1>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <?php require_once('controller/carrinho-busca.php'); ?>
        </div>
    </section>

  </body>
</html>
