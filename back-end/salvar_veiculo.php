<?php

include_once ("conexao.php");

$placa = filter_input (INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$modelo = filter_input (INPUT_POST, 'modelo_veiculo', FILTER_SANITIZE_STRING);
$ano = filter_input (INPUT_POST, 'ano_veiculo', FILTER_SANITIZE_STRING);
$chassi = filter_input (INPUT_POST, 'chassi', FILTER_SANITIZE_STRING);
$marca_veiculo = filter_input (INPUT_POST, 'marca_veiculo', FILTER_SANITIZE_STRING);
$cod_renavam = filter_input (INPUT_POST, 'cod_renavam', FILTER_SANITIZE_STRING);

$result_cadastro = "INSERT INTO veiculo (placa_veiculo, modelo_veiculo, ano_veiculo, chassi, marca_veiculo, cod_renavam) VALUES ('$placa', '$modelo', '$ano', '$chassi', '$marca_veiculo', '$cod_renavam')";
$resultado_usuario = mysqli_query ($conn, $result_cadastro);

if (mysqli_insert_id ($conn)){
    header ("Location: veiculos_cadastrados.php");
}else{
    header ("Location: registrar_veiculo.php");
}

?>