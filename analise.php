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

                case 'Hatch':
                    echo "<h2>O que é tipo de veículo hatch?</h2>
                    <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                    <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                    
                    <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. 
                    Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                
                break;


                case 'Sedan':
                    echo "<h2>Carro para toda família</h2>

                    <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou 
                    para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                    
                    <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — 
                    ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                
                break;

                case 'SUV':
                    echo "<h2>SUV</h2>
                    <p>Em sua definição básica, SUV é a sigla para 'Sport Utility Vehicle', ou 'Veículo Utilitário Esportivo', ou seja, um carro 
                    destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas 
                    e caracteristicamente de porte avantajado.</p>
                    
                    <p>Qual a diferença de um carro SUV?</p>
                    <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. 
                    <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p>";
                
                break;

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