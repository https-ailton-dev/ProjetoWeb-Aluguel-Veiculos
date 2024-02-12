<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/aluguel.css">
    <title>Desenvolvimento Web</title>

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

            $modelo1 = $tempo*100;
            $modelo2 = $tempo*200;
            $modelo3 = $tempo*300;

            echo "<p>Olá Sr.  $name.<br></p>";
            echo "<p>Agradecemos sua preferência.<br></p>";
            echo "<p>Informações do seu pedido:<br></p>";
            echo "<p>Modelo: $modelo</p>
                <p>Data de reserva: $date. OBS: Orçamento válido por 15 dias após esta data.</p>
                <p>Duração da reserva: $tempo</p>";

            if($modelo == "Hatch"){
                echo "<p>O Valor total do orçamento é $modelo1<br></p>";
            }
            elseif($modelo == "Sedan"){
                echo "<p>O Valor total do orçamento é $modelo2<br></p>";
            }
            else{
                echo "<p>O Valor total do orçamento é $modelo3<br></p>";
            }

            echo "<p>Observações adicionais:</p><br>
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