<?php

include_once ("conexao.php");

$solicitante = filter_input (INPUT_POST, 'solicitante', FILTER_SANITIZE_STRING);
$data_da_solicitacao = filter_input (INPUT_POST, 'data_da_solicitacao', FILTER_SANITIZE_STRING);
$veiculos = filter_input (INPUT_POST, 'veiculos', FILTER_SANITIZE_STRING);
$local_de_saida = filter_input (INPUT_POST, 'local_de_saida', FILTER_SANITIZE_STRING);
$local_de_destino = filter_input (INPUT_POST, 'local_de_destino', FILTER_SANITIZE_STRING);
$solicitacao_dia = filter_input (INPUT_POST, 'solicitacao_dia', FILTER_SANITIZE_STRING);
$horario_de_saida = filter_input (INPUT_POST, 'horario_de_saida', FILTER_SANITIZE_STRING);
$previsao_de_retorno = filter_input (INPUT_POST, 'previsao_de_retorno', FILTER_SANITIZE_STRING);
$status_da_solicitacao = filter_input (INPUT_POST, 'status_da_solicitacao', FILTER_SANITIZE_STRING);
$usuarios_do_veiculo = filter_input (INPUT_POST, 'usuarios_do_veiculo', FILTER_SANITIZE_STRING);




$result_cadastro = "INSERT INTO solicitacao (solicitante, data_da_solicitacao, veiculos, local_saida, local_destino, solicitacao_para_dia, horario_saida, previsao_de_retorno, status_da_solicitacao, usuarios_do_veiculo) VALUES ('$solicitante', '$data_da_solicitacao', '$veiculos', '$local_de_saida', '$local_de_destino', '$solicitacao_dia', '$horario_de_saida', '$previsao_de_retorno', '$status_da_solicitacao', '$usuarios_do_veiculo')";
$resultado_usuario = mysqli_query ($conn, $result_cadastro);

if (mysqli_insert_id ($conn)){
    header ("Location: s2.php");
}else{
    header ("Location: s2.php");
}

?>