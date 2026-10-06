<?php 
    namespace APP\Viewer;
    class Resultado {
        public function mostrar(int $numeroEscolhido, int $numeroSorteado) {
            $ganhou = ($numeroEscolhido == $numeroSorteado);

            echo "<!DOCTYPE html> 
            <html lang='pt-br'>
                <head>
                    <meta charset='UTF-8'>
                    <title>Resultado do Sorteio</title>
                    <style>
                        body(font-family: Arial, sans-serif; text-align: center; margin-top: 50px;)
                        .ganhou { color: green; font-weight: bold; font-size: 20px; }
                        .perdeu { color: red; font-weight: bold; font-size: 20px; }
                    </style>
                </head>
                <body>
                    <h1>Resultado do Sorteio</h1>
                    <p>Número escolhido: <strong>$numeroEscolhido;</strong> </p>
                    <p>Número sorteado: <strong> $numeroSorteado;</strong> </p>";
                
                    if ($ganhou) {
                        echo "<p class='ganhou'>Você ganhou!</p>";
                    } else {
                        echo "<p class='perdeu'>Você perdeu!</p>";
                    }
                    
                    echo "<br><a href='../Public/index.php'>Voltar</a>
                </body>
            </html>";
        }
    }
?>
