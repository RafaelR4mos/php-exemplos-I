<?php 
$texto = "Hello, PHP!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./04-projeto-exemplo/styles/global.css">
  <link rel="stylesheet" href="./styles.css">
  <title>Hello PHP</title>
</head>
<body>
  <header>
    <strong>PHP Exemplos</strong>
    <nav>
      <a href="./01-renderizar-lista/index.php">Renderizar lista</a>
      <a href="./02-renderizacao-condicional/index.php">Renderizar lista Condicional</a>
      <a href="./03-formularios/formulario.html">Formulário</a>
      <a href="./04-projeto-exemplo/index.php">Projeto Exemplo</a>
    </nav>
  </header>
  
  <main>
    <h1><?php echo $texto; ?></h1>
    <hr>
  </main>
</body>
</html>