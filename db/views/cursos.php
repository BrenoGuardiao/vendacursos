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

<a href="?pagina=inserir_curso">Inserir novo curso</a>
<table style="border: 1px solid #ccc; width: 100%" >
<tr>
    <th>Nome Curso</th>
    <th>Carga Horária/Horas</th>
    <th>Deletar</th>
</tr>

<?php
    while($linha= mysqli_fetch_array($consulta_cursos)){
        echo '<tr><td>'.$linha['nome_curso'].'</td>';
        echo '<td>'.$linha['duracao'].'</td>';        
?>
    <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
<?php
  }
?>
  </table>
