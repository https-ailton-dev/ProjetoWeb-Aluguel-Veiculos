<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                    <a href="hatch.php">Alugue Agora</a>
                </div>


                <div>
                    <h3>Modelo de Carros Sedan</h3>
                    <img src="img/sedan.png" alt="Modelo Sedan"><br>
                    <a href="sedan.php">Alugue Agora</a>
                </div>

                <div>
                    <h3>Modelo de Carros SUV</h3>
                    <img src="img/suv.png" alt="Modelo SUV"><br>
                    <a href="suv.php">Alugue Agora</a>
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

        <fieldset>
    
            <legend><h2>Faça seu orçamento!</h2></legend>

            <form action="aluguel.php" method="post" target="">

                <label for="nomeCliente">Nome</label><br>
                <input type="text" id="nomeCliente" name="name" placeholder="Insira seu nome completo"><br><br>

                <label for="data">Data de Orçamento</label><br>
                <input type="date" id="data" name="date" ><br><br>

                <label for="tempo">Tempo de Reserva (Dias)</label><br>
                <input type="number" id="tempo" name="tempo" placeholder="0"><br><br>

                <label>Escolha o Modelo</label><br>
                <select name="modelo">
                    <option>Hatch</option>
                    <option>Sedan</option>
                    <option>SUV</option>
                </select>
                <br><br>

                <label for="obs">Observações</label><br>
                <input type="text" id="obs" name="obs" placeholder="Insira observações necessárias"><br><br>

                <input type="submit" name="Enviar" value="OK"><br>
            </form>

        </fieldset>

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