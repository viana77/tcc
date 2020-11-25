<?php include_once ("includes/header.php");?>
<div class="row center-align">
    <header class="row center-align">
        <?php
        if(!empty($_SESSION['idfuncionario'])){
            echo "<h4>Olá ".$_SESSION['nome'].", Bem vindo <br></h4>";
            //echo "Cargo ".$_SESSION['cargo'].", Bem vindo <br>";
            //echo "<a href='sair.php'>Sair</a>";
        }else{
            $_SESSION['msg'] = "Área restrita";
            header("Location: index.php");	
        }
?>
        <p><strong>O que deseja fazer?</strong></p>
    </header>
    <a href="#user"><img class="circle" src="https://avatarsed1.serversdev.getgo.com/2205256774854474505_medium.jpg"></a>
</div>

<form action="solicitacao.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="solicitacoesG">Solicitar um veículo<i class="material-icons right">assignment</i>
    </button>
</div>
</form>

<form action="solicitacoes.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="solicitacoesG" value="g">Consultar solicitações<i class="material-icons right">assignment</i>
    </button>
</div>
</form>

<form action="registrar_veiculo.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="registrarV">Registrar um novo veículo<i class="material-icons right">assignment</i>
    </button>
</div>
</form>

<form action="lista_de_relatorios.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="relatorios">Consultar relatório de viagem<i class="material-icons right">description</i>
    </button>
</div>
</form>

<div class="row center-align">
<a href="index.php" class="btn red">Sair</a>
</div>

<?php include_once ("includes/footer.php");?>