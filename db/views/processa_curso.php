<?php

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$duracao = $_POST['duracao']; 

$query = "INSERT INTO CURSOS(nome_curso, duracao) VALUES('$nome_curso', $duracao)";

mysqli_query($conexao, $query);

header('location:/projetos/DB/index.php?pagina=cursos');
?>