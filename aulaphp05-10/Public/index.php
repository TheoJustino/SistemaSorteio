<?php 
    require_once __DIR__ . '/../APP/Controller/ControleSorteio.php';
    use APP\Controller\ControleSorteio;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numeroEscolhido = (int)$_POST['numero'];
        $controle = new ControleSorteio();
        $controle->processarSorteio($numeroEscolhido);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio MVC</title>
</head>
<body>
    <h1>Sistema de Sorteio</h1>
    <form method="POST">
        <label for="numero">Escolha um número de 1 a 10:</label>
        <select name="numero" id="numero" required>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option> 
            <?php endfor; ?>
        </select>
        <button type="submit">Sortear</button>
    </form>
</body>
</html>