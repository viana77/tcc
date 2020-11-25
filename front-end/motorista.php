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
            header("Location: login.php");	
        }
        ?>
        <p><strong>O que deseja fazer?</strong></p>
    </header>
    <a href="#user"><img class="circle" src="https://avatarsed1.serversdev.getgo.com/2205256774854474505_medium.jpg"></a>
</div>

<form action="soli2.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="solicitar_veiculo">Solicitar veículo<i class="material-icons right">assignment</i>
    </button>
</div>
</form>

<form action="relatorio1.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="relatorio">Criar relatório de viagem<i class="material-icons right">add_box</i>
    </button>
</div>
</form>

<form action="lr2.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="relatorios">Relatorios<i class="material-icons right">description</i>
    </button>
</div>
</form>

<form action="s2.php">
<div class="row center-align">
    <button class="btn waves-effect waves-light" type="submit" name="solicitacoes_positivas">Consultar solicitações de status positivo<i class="material-icons right">assignment</i>
    </button>
</div>
</form>

<div class="row center-align">
<a href="index.php" class="btn red">Sair</a>
</div>

<?php include_once ("includes/footer.php");?>