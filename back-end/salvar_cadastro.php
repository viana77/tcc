<?php

include_once ("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input (INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input (INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input (INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$celular = filter_input (INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$cargo = filter_input (INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$sexo = filter_input (INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$senha = md5($senha);

$result_cadastro = "INSERT INTO funcionario (nome, sobrenome, data_nascimento, cpf, celular, cargo, email, senha, sexo) VALUES ('$nome', '$sobrenome', '$data_nascimento', '$cpf', '$celular', '$cargo', '$email', '$senha', '$sexo')";
$resultado_usuario = mysqli_query ($conn, $result_cadastro);

if (mysqli_insert_id ($conn)){
    header ("Location: index.php");
}else{
    header ("Location: cadastro.php");
}

?>