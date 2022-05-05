<?php

include 'db.php';

$id_alunos = $_POST['escolha_aluno'];
$id_cursos = $_POST['escolha_curso']; 

$query = "INSERT INTO ALUNOS_CURSOS(id_alunos, id_cursos) VALUES(
    $id_alunos, $id_cursos)";

mysqli_query($conexao, $query);

header('location:/projetos/DB/index.php?pagina=matriculas');
?>