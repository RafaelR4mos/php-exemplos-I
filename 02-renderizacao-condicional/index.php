<?php
  $bancos = [
    "4444" => [
      "nome" => "Banco 1",
      "cidade" => "Porto Alegre",
      "estado" => "Rio Grande do Sul"
    ],
    "5555" => [
      "nome" => "Banco 2",
      "cidade" => "Rio de Janeiro",
      "estado" => "Rio de Janeiro"
    ],
    "6666" => [
      "nome" => "Banco 3",
      "cidade" => "São Paulo",
      "estado" => "São Paulo"
    ],
    "7777" => [
      "nome" => "Banco 4",
      "cidade" => "Gravataí",
      "estado" => "Rio Grande do Sul"
    ]
  ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02 - Renderização Condicional</title>
</head>
<body>
    <h1>02 - Renderização Condicional</h1>
    <hr>

    <?php 
    unset($bancos); //Retirando os itens da lista o aviso aparecerá.
    if(isset($bancos)) {  ?>
      <?php foreach($bancos as $ag => $banco) { ?>
        <dl>
          <dt>
            <strong><?= $ag ?></strong>
          </dt>
          <dd><?= $banco["nome"] ?></dd>
          <dd><?= $banco["cidade"] ?></dd>
          <dd><?= $banco["estado"] ?></dd>
        </dl>
      <?php } ?>
    <?php } else { ?>
              <strong>Nenhum banco foi encontrado</strong>
            <?php  } ?> 
</body>
</html>