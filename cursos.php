<?php
include_once("conexaodb.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Cursos</h1>

    <h2>Cursos cadastrados</h2>
    <table border="1">
      <tr>
        <th>ID do Curso </th>
        <th>Nome do Curso</th>
      </tr>
      <?php
      $stmt = $pdo->prepare("SELECT * FROM cursointeresse");
      $stmt->execute();
      $resultados = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      //pegue os resultados
      $linhas = $stmt->fetchAll();
      foreach($linhas as $linha) {
        echo "<tr>";
        echo "<td>" . $linha['idCursoInteresse'] . "</td>";
        echo "<td>" . $linha['Nome'] . "</td>";
        echo "</tr>";
      }
    ?>
  </table>

    <h2>Cadastrar novo curso</h2>
    <form action="curso_add.php" method="get">
        <label for="nome_curso">Nome do curso:</label>
        <input type="text" id="nome_curso" name="nome_curso">
        <br>
        <input type="submit">
    </form>
  </body>
</html>