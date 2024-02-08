<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Desenvolvimento Web</title>

    <style type="text/css">
        .formulario{
            background-color: #808080;
            color: #fff;
            text-shadow: 1px 1px #000;
            padding: 10px;
            font-size: 1.8rem;
        }
        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
        }
        h3{
            text-align: left;
        }
    </style>

</head>
<body>

    <header>
        <h3>Programação Web</h3>
        <h4>Desenvolvimento </h4>
    </header>
    <br>
    <section >
        <h1>Projeto Desenvolvido por Ailton Daniel</h1><br><br>
        <h2>Resultado da Pesquisa</h2><br>
        <?php

            $pesquisa = $_POST["pesquisa"];

            switch ($pesquisa) {

                

                default:
                    echo "Não encontramos nenhum resultado de sua pesquisa, por favor tente novamente!<br>";
                    break;
            }

        ?>
        <br>

        <a href="index.php">Voltar</a>

    </section>
    <br>

    <footer>
        <h3>Desenvolvedor Ailton Daniel</h3>
        <h4>Projeto Site HTML, CSS & PHP</h4>
        <br>
        <p class="texto-rodape"><strong>Contatos</strong></p>
        <p class="texto-rodape">Email: ailton.developer@gmail.com</p>
        <p class="texto-rodape">WhatsApp: (11) 96312-1285</p>
    </footer>
    
</body>
</html>