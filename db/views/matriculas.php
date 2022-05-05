<style>
a:link, a:visited {
  background-color: #262626;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #44b874;
}
</style>
<a href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<table style="border: 1px solid #ccc; width: 100%" >
<tr>
    <th>Nome Aluno</th>
    <th>Nome do Curso</th>
    <th>Deletar</th>
</tr>

<?php
    while($linha= mysqli_fetch_array($consulta_matriculas)){
        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'.$linha['nome_curso'].'</td>';        
?>
   <td><a href="deleta_matricula.php?id_alunos_cursos=<?php echo $linha['id_alunos_cursos']; ?>">Deletar</a></td></tr>

<?php
    }
?>
  </table>





    
    