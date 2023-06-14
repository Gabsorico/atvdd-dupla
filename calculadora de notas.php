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
