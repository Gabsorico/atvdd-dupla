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

<!DOCTYPE html>
<html>
<head>
  <title>Calculadora de Notas</title>
</head>
<body>
  <h1>Calculadora de Notas</h1>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="disciplina1">Disciplina 1:</label>
    <input type="number" step="0.01" name="notas[]" id="disciplina1" required><br>

    <label for="disciplina2">Disciplina 2:</label>
    <input type="number" step="0.01" name="notas[]" id="disciplina2" required><br>

    <label for="disciplina3">Disciplina 3:</label>
    <input type="number" step="0.01" name="notas[]" id="disciplina3" required><br>

    <input type="submit" value="Calcular Média">
  </form>
</body>
</html>
