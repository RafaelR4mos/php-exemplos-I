<?php
  //VIA POST
    if (isset($_POST["cadastrado"])) {
    echo "Agência: {$_POST["agencia"]}" . "<br/>";
    echo "Nome: {$_POST["nome"]}" . "<br/>";
    echo "Cidade: {$_POST["cidade"]}" . "<br/>";
    echo "Estado: {$_POST["estado"]}" . "<br/>";
  }


  //VIA GET

  // if (isset($_GET["cadastrado"])) {
  //   echo "Agência: {$_GET["agencia"]}" . "<br/>";
  //   echo "Nome: {$_GET["nome"]}" . "<br/>";
  //   echo "Cidade: {$_GET["cidade"]}" . "<br/>";
  //   echo "Estado: {$_GET["estado"]}" . "<br/>";
  // }
?>



