<?php
session_start();

// Função para calcular a média das notas
function calcularMedia($notas) {
  $soma = array_sum($notas);
  $media = $soma / count($notas);
  return $media;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém as notas do formulário
  $notas = $_POST["notas"];

  // Armazena as notas na sessão
  $_SESSION["notas"] = $notas;

  // Redireciona para a página de resultado
  header("Location: resultado.php");
  exit();
}
?>
