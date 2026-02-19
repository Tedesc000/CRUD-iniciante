<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'crud_canal_ti');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível estabelecer conexão com o banco de dados');
?>