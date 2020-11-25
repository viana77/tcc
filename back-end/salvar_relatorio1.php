<?php

include_once ("conexao.php");

$dataR = filter_input (INPUT_POST, 'data_relatorio', FILTER_SANITIZE_STRING);
$horario_saida = filter_input (INPUT_POST, 'horario_saida', FILTER_SANITIZE_STRING);
$horario_chegada = filter_input (INPUT_POST, 'horario_chegada', FILTER_SANITIZE_STRING);
$origem = filter_input (INPUT_POST, 'origem', FILTER_SANITIZE_STRING);
$destino = filter_input (INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
$km_inicial = filter_input (INPUT_POST, 'km_inicial', FILTER_SANITIZE_STRING);
$km_final = filter_input (INPUT_POST, 'km_final', FILTER_SANITIZE_STRING);
$observacoes = filter_input (INPUT_POST, 'observacoes', FILTER_SANITIZE_STRING);


$result_cadastro = "INSERT INTO relatorio (data_relatorio, horario_saida, horario_chegada, origem, destino, km_inicial, km_final, observacoes) VALUES ('$dataR', '$horario_saida', '$horario_chegada', '$origem', '$destino', '$km_inicial', '$km_final', '$observacoes')";
$resultado_usuario = mysqli_query ($conn, $result_cadastro);

if (mysqli_insert_id ($conn)){
    header ("Location: lr2.php");
}else{
    header ("Location: relatorio1.php");
}

?>