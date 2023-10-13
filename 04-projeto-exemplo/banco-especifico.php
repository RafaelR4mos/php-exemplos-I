<?php
  session_start();


  if(isset($_GET["banco_ag"])) {
    $agBanco = $_GET["banco_ag"];
    $bancoEspecifico = $_SESSION["bancos"][$agBanco];
  }

  if(isset($_POST["isDelete"])) {
    unset($_SESSION["bancos"][$agBanco]);
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

  <title><?= isset($bancoEspecifico) ? $bancoEspecifico["nome"] : "Não encontrado"?></title>
  
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/banco-especifico.css">
</head>
<body>
  <main>
  <?php if(isset($bancoEspecifico)) { ?>
    <header class="bancos-especifico-header">
      <a href="./"><i class="ph ph-arrow-left" title="Botão voltar"></i></a>
      <h1><?= $bancoEspecifico["nome"] ?></h1>
    </header>
    <hr>

    <div class="banco-info">
      <h2>Informações do Banco:</h2>

      <div><strong>Agência: </strong> <?= $agBanco ?></div>
      <div><strong>Cidade: </strong> <?= $bancoEspecifico["cidade"] ?></div>
      <div><strong>Estado: </strong> <?= $bancoEspecifico["estado"] ?></div>

      <div class="banco-btn-container">
        <a href="./formulario-banco.php?banco_ag=<?=$agBanco?>" class="action-btn">
          <i class="ph-fill ph-pencil-line" title="ícone de editar banco"></i> 
          Editar Banco
        </a>
        <form method="POST">
          <button type="submit" name="isDelete" class="action-btn">
            <i class="ph-fill ph-trash" title="ícone de deletar banco"></i> 
            Remover Banco
          </button>
        </form>
      </div>
    </div>


    <?php } else { ?>
      <h2>Banco não encontrado</h2>
    <?php } ?>

  </main>
</body>
</html>