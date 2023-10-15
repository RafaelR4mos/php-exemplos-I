<?php
require_once "./bancos-lista.php";
session_start();

if(isset($_SESSION["bancos"])) {
  $dadosBancos = $_SESSION["bancos"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <title>Bancos Info</title>
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/bancos.css">
</head>
<body>
  <main class="bancos-page">
    <div class="bancos-header">
      <h1>Bancos Cadastrados:</h1>
      <hr>
    </div>
    <div class="bancos-container">
    <?php foreach(isset($dadosBancos) ? $dadosBancos : $bancos as $ag => $banco) { ?>
      <div class="banco">
        <strong><?= $banco["nome"] ?></strong>
        <span>Agência: <?= $ag ?></span>
        <a href="./banco-especifico.php?banco_ag=<?= $ag ?>">Saiba mais</a>
      </div>
    <?php } ?>
    </div>
    <div class="add-banco-container">
      <a class="add-banco-btn" href="./formulario-banco.php"><i class="ph ph-plus" title="ícone Adicionar banco"></i> Adicionar Banco</a>
    </div>
  </main>
</body>
</html>
