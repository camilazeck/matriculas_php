<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Meu título!</h1>
  <p>Aqui vai o código HTML que fará seu site aparecer.</p>
  <p>Link para o Google: <a href="htpps://google.com/">Google</a><p>
  <table border="1">
    <tr> <!-- Cria uma linha com dois cabeçalhos -->
        <th>ID do Curso</th>
        <th>Nome do Curso</th>
      </tr>
      <tr> <!-- Cria uma segunda linha com os dados -->
        <td>1</td>
        <td>Técnico em Informática</td>
      </tr>
    </table>
    <h2>Listas</h2>
    <p>Exemplo de lista ordenada (ol):</p>
    <ol>
      <li><strong>Item 1</strong> <!-- Negrito -->
        <ol><!-- Lista dentro de uma lista (sublista) -->
          <li>Subitem 1</li>
        </ol>
      </li>
      <li><i>Item 2</i></li> <!-- Itálico -->
  </ol>
    <p>Exemplo de lista não-ordenada (ul):</p>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
    </ul>

    <h2>Formulário</h2>
    <p>Exemplo de formulário usando HTML.</p>
    <form>
      <fieldset>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br>
        Sexo:
        <input type="radio" id="masculino" name="sexo" value="M">
        <label for="masculino">Masculino</label>
        <input type="radio" id="feminino" name="sexo" value="F">
        <label for="feminino">Feminino</label>
        <br>
        <label for="cursos">Curso de Interesse:</label>
        <select id="cursos" name="cursos">
          <option value="0">-- Selecione um curso --</option>
          <option value="1">Técnico em Informática</option>
        </select>
        <br>
        <input type="submit">
        <input type="reset">
      </fieldset>
  </form>
  </body>
</html>