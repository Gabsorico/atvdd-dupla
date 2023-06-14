<?php
session_start();

// Verifica se as notas estão armazenadas na sessão
if (isset($_SESSION["notas"])) {
  // Obtém as notas da sessão
  $notas = $_SESSION["notas"];

  // Calcula a média
  $media = calcularMedia($notas);

  // Limpa as notas armazenadas na sessão
  unset($_SESSION["notas"]);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Resultado</title>
</head>
<body>
  <h1>Resultado</h1>
  <?php if (isset($media)) { ?>
    <p>A média das notas é: <?php echo $media; ?></p>
  <?php } else { ?>
    <p>Nenhuma nota foi inserida.</p>
  <?php } ?>
</body>
</html>
