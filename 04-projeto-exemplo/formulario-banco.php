<?php
require_once "./bancos-lista.php";
session_start();

if(isset($_GET["banco_ag"])) {
  $dadosBanco = $_SESSION["bancos"][$_GET["banco_ag"]];
}

if(isset($_POST["sucesso"])) {
  $bancos[$_POST["agencia"]] = [
    "nome" => $_POST["nome"],
    "cidade" => $_POST["cidade"],
    "estado" => $_POST["estado"]
  ];

  $_SESSION["bancos"] = $bancos;
  header("Location: ./");
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

  <title>Formulário Banco</title>

  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/formulario-banco.css">
</head>
  <main>
    <div class="formulario-header">
      <a href="./" class="back-link"><i class="ph ph-arrow-left" title="Botão voltar"></i></a>
      <h1><?= isset($dadosBanco) ? "Editar banco - Ag: {$_GET["banco_ag"]}" : "Cadastrar banco" ?></h1>
    </div>

    <form class="formulario" method="POST">
      <div>
        <label for="agencia">Agência</label>
        <input type="number" value="<?= isset($dadosBanco) ? $_GET["banco_ag"] : "" ?>" placeholder="0000" name="agencia" id="agencia" required>
      </div>

      <div>
        <label for="nome">Nome Banco</label>
        <input type="text" value="<?= isset($dadosBanco) ? $dadosBanco["nome"] : ""?>" placeholder="Banco 0" name="nome" id="nome" required>
      </div>

      <div>
        <label for="cidade">Cidade</label>
        <input type="text" value="<?= isset($dadosBanco) ? $dadosBanco["cidade"] : ""?>" placeholder="Florianópolis" name="cidade" id="cidade" required>
      </div>

      <div>
        <label for="estado">Estado</label>
        <input type="text" value="<?= isset($dadosBanco) ? $dadosBanco["estado"] : ""?>" placeholder="Santa Catarina" name="estado" id="estado" required>
      </div>

      <button type="submit" name="sucesso"><?= isset($dadosBanco) ? "Editar" : "Cadastrar" ?></button>
    </form>
  </main>
</body>
</html>