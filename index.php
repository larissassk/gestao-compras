
<!DOCTYPE html>
<html>
  <head>
    <!-- Material disponibilizado pelo professor Anderson Macedo -->
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/.css" media="screen" title="no title" charset="utf-8">
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
body{
      background-color: fff;

}

.center {
    max-width: 1000px;
    margin: 0 auto;
}

header {
    width: 100%;
    height: 60px;
    background: #3483fa;
    border-bottom: 1px solid #3483fa;
}

header h1 {
    font-size: 20px;
    float: left;
    color: #fff;
    line-height: 60px;
    padding-left: 20px;
}

header a {
    float: right;
    text-decoration: none;
    color: #fff;
    line-height: 60px;
    padding: 0 20px;
    border-radius: 4px;
}

header a:hover {
    opacity: 0.7;
}

section#produtos ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
    margin: 0;
}

section#produtos ul li {
    width: calc(50% - 20px);
    padding: 20px;
    background: #fff;
    margin: 10px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

section#produtos ul li h2 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

section#produtos ul li p {
    color: #555;
    line-height: 1.5;
}

section#produtos ul li a {
    text-decoration: none;
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    color: #ffffff;
    background: #3483fa;
    border-radius: 4px;
    transition: background 0.3s ease;
}

section#produtos ul li a:hover {
    background: #3483fa;
}
  </style>


  <body>
    <header>
      <div class="center">
        <h1 style="text-align: center">E-commerce - PW </h1>
        <a id="but-carrinho" href="carrinho.php" target="_blank">Carrinho</a>
      </div>
    </header>
    <section id="produtos">
      <h1 style="text-align: center; color: #333">Pedido de Compra</h1>
        <div class="center">
          <?php require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>

  </body>
</html>
