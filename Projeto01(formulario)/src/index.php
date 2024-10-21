<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="../img/img.ico">
    <link rel="stylesheet" href="../css/Index.css">
    <title>Trabalho</title>
</head>

<body>
    <header>
        <h2><a href="/"> 🧑‍💻</a></h2>
        <nav>
            <ul>
                <li><a href="../src/sobre.html">Sobre</a></li>
                <li><a href="../src/Contatos.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <figure>
        <img src="../img/paisagem.jpg" alt="">
        <figcaption><b> 1. Imagem</b></figcaption>
    </figure>
    <section>
        <p>Olá me chamo Claiton, estou aprendendo a programar ...!!</p>
    </section>
    <?php
   
   ?>
    <nav>
        <ul>
            <form action="./Config.php" method="post">
                <label for="Nome">Nome</label><input type="text" id="Nome" name="nome" title="nome"
                    placeholder="Digite seu nome" required><br>
                <label for="Email">Email</label><input type="email" name="email" id="Email"
                    placeholder="Digite o E-mail de destino" required><br>
                <input type="file" name="file" id="file"><br>
                <input type="datetime-local" name="data"><br>
                <textarea type="text" name="texto" placeholder="Digite seu texto" rows="7" cols="27" required></textarea>
                <input type="reset" id="button" value="Limpar">
                <input type="submit" id="button" value="Enviar">
                <small class="asteristico">*Campos Obrigatorios</small>
            </form>
        </ul>
    </nav>
</body>

</html>