<?php
include_once 'classes.php';

$a = '7';
$b = '8';
$login = new Cadastro();
$login->Cadastrar($a, $b, $conn);
