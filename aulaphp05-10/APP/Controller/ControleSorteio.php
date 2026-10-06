<?php
    namespace APP\Controller;

    require_once __DIR__ . '/../Model/ModelSorteio.php';
    require_once __DIR__ . '/../Viewer/Resultado.php';

    use APP\Model\Sorteio;
    use APP\Viewer\Resultado; 

    $numeroEscolhido = $_POST['numero'];

    class ControleSorteio {
        public function processarSorteio(int $numeroEscolhido) {
            $sorteio = new Sorteio();
            $numeroSorteado = $sorteio->sortear();

            $resultadoView = new Resultado();
            $resultadoView->mostrar($numeroEscolhido, $numeroSorteado);
        }
    }