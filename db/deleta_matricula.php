<?php

include 'views/db.php';
    
$id_alunos_cursos = $_GET['id_alunos_cursos'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE (ID_ALUNOS, ID_CURSOS) = (
    $id_alunos, $id_cursos)";

mysqli_query($conexao, $query);

//header('location:/projetos/db/index.php?pagina=matriculas');