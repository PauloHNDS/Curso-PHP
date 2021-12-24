<?php 
session_start();
session_destroy();

header("Location: http://localhost:8080/CursoPHP/Curso-PHP/exercicios.php?dir=sessao&file=sessao2");