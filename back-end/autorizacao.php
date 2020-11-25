<?php

include_once ("conexao.php");

$idsolicitacao = filter_input(INPUT_GET, 'idsolicitacao', FILTER_SANITIZE_STRING);
$autorizacao = filter_input(INPUT_GET, 'autorizacao', FILTER_SANITIZE_STRING);

echo $idsolicitacao;
echo $autorizacao;

if($autorizacao == 's'){
        $status = 'Autorizado';
    }else{
        $status = 'Negado';
}

echo $status;

if(!empty($autorizacao)){
    
    $result_cadastro = "UPDATE solicitacao SET status_da_solicitacao = '$status' WHERE idsolicitacao = '$idsolicitacao'";
    $resultado_usuario = mysqli_query($conn, $result_cadastro);

    if ($resultado_usuario){
        header ("Location: solicitacoes.php?solicitacoesG=g");
    }else{
        header ("Location: solicitacoes.php?solicitacoesG=g");
    }
}



?>