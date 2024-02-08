<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Desenvolvimento Web</title>

    <style type="text/css">
        header{
            position: fixed;
            width: 100%;
        }
        .formulario{
            
            color: #000;
            text-shadow: 1px 1px #000;
            padding: 10px;
            font-size: 1.8rem;
            text-align: right;
        }
        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
            border: solid;
        }
        h1{
            text-align: center;
        }
        h2{
            text-align: left;
        }
        p{
            font-size: 1.6rem;
            padding: 10px;
        }
        #grid-container{
            background-color: #ADD8E6;
        }
        .grid{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 5px;
            max-width: 1200px;
            margin: 0 auto;
           
        }
        .grid div{
            font-size: 1.6rem;
            text-align: center;
            background-color: #FFFFFF;
        }

    </style>

</head>
<body>

    <header>
        <h3>Programação Web</h3>
        <h4>Desenvolvimento</h4>
    </header>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <section >
        <h1>Projeto Desenvolvido por Ailton Daniel</h1><br>
        <h2>Aluguel de Veículos</h2>

        <div class="formulario">

            <form action="analise.php" method="post" target="">
                <label for="pesquisa">Pesquisar</label>&nbsp
                <input type="text" id="pesquisa" name="pesquisa" placeholder="">
                <input type="submit" name="Enviar" value="OK"><br>
            </form>

        </div>

        <br><br>
      
        <section class="container" id="grid-container">   

            <div class="grid">

                <div>Conteúdo 1</div>
                <div>Conteúdo 2</div>
                <div>Conteúdo 3</div>
                <div>Conteúdo 4</div>
                <div>Conteúdo 5</div>
                <div>Conteúdo 6</div>

            </div>

        </section>

		<br><br>

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