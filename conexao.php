<?php
date_default_timezone_set('America/Sao_Paulo');

$email_adm = "desousathiagoluiz@gmail.com";

$usuario = 'root';
$senha = '';
$servidor = 'localhost:3307';
$banco = 'totusbanco';

try {
   $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha" );
   
} catch (Exception $e) {
   echo 'Erro ao conectar com o banco de dados! <br>';
   echo $e;
}

//INSERIR REGISTROS INICIAIS

//Criar um Usuário ADM com nivel Super.
$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$senha_cript = md5(123);

if ($total_reg == 0) {
   $pdo->query("INSERT INTO usuarios SET nome = 'Administrador', cpf = '000.000.000-00', email = '$email_adm', senha_crip = '$senha_cript', senha = '123', nivel = 'Administrador', foto = 'sem-perfil.jpg' ");
}

 ?>

