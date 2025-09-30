<?php
include_once("login_verifica.php");
include_once("conexaodb.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include_once("html/navbar.php"); ?>
    
    <div class="container">
      <!-- Cria uma nova linha -->
      <div class="row">
        <!-- Cria uma nova coluna centralizada em computadores (lg),
          Exibe uma única coluna em celulares -->
        <!-- A soma de colunas em uma linha é no máximo 12 colunas -->
        <div class="col-lg-2"></div>
        <div class="col-lg-8 col-sm-12" style="background-color: lightblue;">
          <h1>Cursos</h1>
          <h2>Cursos cadastrados</h2>
    <table class="table">
      <tr>
        <th>ID do Curso </th>
        <th>Nome do Curso</th>
        <th colspan="2">Ações</th>
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
        echo "<td><a href='curso_delete.php?id_curso=" . $linha['idCursoInteresse'] . "'
                    onclick='return confirm(\"Tem certeza que deseja excluir o curso selecionado?\")'>Delete</a></td>";
        echo"<td><a href='cursos.php?id_curso=" . $linha['idCursoInteresse'] . "'>Editar</a></td>";
        echo "</tr>";
      }
    ?>
  </table>

  <?php
  $id_curso = isset($_GET["id_curso"]) ? $_GET["id_curso"] : '';
  //exibe o formulário de adicionar novo curso apenas se não estamos editando um curso existente,
  //ou seja, $id_curso está vazio.
  if(empty($id_curso)) {
  ?>
    <h2>Cadastrar novo curso</h2>
    <!-- Cria uma nova linha -->
    <div class="row">
      <!-- Ocupa metade da tela no computador (lg),
      Ocupa toda a tela do celular (sm) -->
      <div class="col-lg-6 col-sm-12">
    <form action="curso_add.php"method="get">
      <label for="nome_curso" class="form-label">Nome do curso:</label>
      <input type="text" id="nome_curso" name="nome_curso" class="form-control" required>
      <br>
      <input type="submit" class="form-control btn btn-primary">
    </form>
  <?php } else { ?>
    <h2>Editar curso existente</h2>
    <form action="curso_update.php" method="get">
      <label for="nome_curso">Nome do curso:</label>Nome do curso:</label>
      <input type="text" id="nome_curso" name="nome_curso" class="form-control" required> 
      <input type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">
      <br>
      <input type="submit" class="form-control btn btn-primary">
    </form>
  </form>
  <?php } ?>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </body>
</html>