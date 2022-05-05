<?php

include 'views/db.php'; 

include 'header.php';

@$pagina = $_GET['pagina'];

switch($pagina){
    case 'cursos': include 'views/cursos.php'; break;
    case 'inserir_curso': include 'views/inserir_curso.php'; break;
    case 'alunos': include 'views/alunos.php'; break;
    case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
    case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
    case 'matriculas': include 'views/matriculas.php'; break;
    case 'home': include 'home.php'; break;
}

include 'footer.php';

?>
