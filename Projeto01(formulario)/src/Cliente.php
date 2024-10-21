<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="ICON" type="ICON" sizes="16x16" href="../img/img.ico">
  <link rel="stylesheet" href="../css/cliente.css">
  <title>Bem vindo </title>
</head>

<body>

  <!-- Top Navigation Menu -->
  <div class="topnav">
    <a href="#home" class="active">Cliente</a>
    <div id="myLinks">
      <a href="../src/index.html">Home</a>
      <a href="../src/Contatos.html">Contato</a>
      <a href="../src/sobre.html">Sobre</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>

  <figure>
    <img src="../img/paisagem.jpg" alt="">
    <figcaption><b> 1. Imagem</b></figcaption>
  </figure>

  <body>
    <section>
      <h1>BEM VINDO </h1>
    </section>
    <?php

    // $nome = $_POST["nome"];
    // $email = $_POST["email"];
    // $file = $_POST["file"];
    // $datetime = date('d/m/Y');

    ?>

    <form action="./" method="post" >
      <fieldset>
        <legend>Cliente</legend>
        <p>Nome : <?= $nome ?></p>
        <p>Email: <?= $email ?></p>
        <p>File : <?= $file ?></p>
        <p>Data : <?= $datetime ?></p><br>
        <br>
        <br>
        <br>
        <button id="button" value="Enviar">Enviar</button><br>
        <br>

      </fieldset>
      <br>

    </form>

  </body>

</html>