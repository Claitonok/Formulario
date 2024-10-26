<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="../img/img.ico">
    <link rel="stylesheet" href="../css/stylesheet.css">
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
    <script src="./mensagem.js"></script> 
    <figure>
        <img src="../img/paisagem.jpg" alt="">
        <figcaption><b> 1. Imagem</b></figcaption>
    </figure>
    <section>
        <p>Olá me chamo Claiton, estou aprendendo a programar ...!!</p>
    </section>
    <nav>
        <ul>
            </ul>
        </nav>
        <form action="./Config.php" method="post">
            <label for="Nome"><br>Nome:</label>
            <input type="text" id="Nome" name="nome" title="nome" placeholder="Digite seu nome" required>
            <label for="Email"><br>E-mail:</label>
            <input type="email" name="email" id="email" placeholder="Digite o E-mail de destino" required>
            <input type="file" name="file"><br>
            <input type="datetime-local" name="data" required>
            <textarea type="text" class="textarea" name="texto" placeholder="Digite seu texto" rows="7" cols="27" required></textarea>
            <input type="reset" id="button" value="Limpar">
            <input type="submit" id="button" value="Enviar">
            <small class="asteristico"><b>* Campos Obrigatorios</b></small>
        </form>
</body>
</html>