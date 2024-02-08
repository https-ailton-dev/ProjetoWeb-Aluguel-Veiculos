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
        h3{
            text-align: center;
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
        img{
            width: 85%;
            height: 80%;
        }
        a{
            font-size: 1.7rem;
            color: #6A5ACD;
            font-weight: bold;
            text-decoration: none;
        }
        fieldset{
            border: solid;
            padding: 3%;
            font-size: 1.7rem;
            font-weight: bold;
            text-align: left;
        }
        select{
            border-radius: 10px;
            border: solid;
            padding: 5px;
            font-size: 1.7rem;
            font-weight: bold;
        }
        option{
            font-size: 1.7rem;
            font-weight: bold;
            padding: 5px;
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

                <div>
                    <h3>Modelo de Carros Hatch</h3>
                    <img src="img/hatch.png" alt="Modelo Hatch"><br>
                    <a href="hatch.html">Alugue Agora</a>
                </div>


                <div>
                    <h3>Modelo de Carros Sedan</h3>
                    <img src="img/sedan.png" alt="Modelo Sedan"><br>
                    <a href="sedan.html">Alugue Agora</a>
                </div>

                <div>
                    <h3>Modelo de Carros SUV</h3>
                    <img src="img/suv.png" alt="Modelo SUV"><br>
                    <a href="suv.html">Alugue Agora</a>
                </div>

                <!--
                <div>Conteúdo 4</div>
                <div>Conteúdo 5</div>
                <div>Conteúdo 6</div>
                -->

            </div>

        </section>

		<br><br>

    </section>

    <br>

    <section>

        <?php

            $name = $_POST["name"];
            $date = $_POST["date"];
            $tempo = $_POST["tempo"];
            $modelo = $_POST["modelo"];
            $obs = $_POST["obs"];

            echo "Olá Sr.  $name.<br><br>";
            echo "Agradecemos sua preferência.<br><br>";
            echo "Informações do seu pedido:<br><br>";
            echo "<p>Modelo: $modelo</p>
                <p>Data de reserva: $date</p>
                <p>Duração da reserva: $tempo</p>";
            echo "<p>Observações adicionais:</p>
            <p>$obs</p>";


        ?>

        <br><br>
        <a href="index.php">Voltar</a>

    </section>

    <br><br>

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