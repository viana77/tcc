<?php include_once ("includes/header.php"); ?>
<section class="">
        <div class="row">
            <form action="salvar_veiculo.php" name="form_cadastro" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Registrar Veículo</h4>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="placa" type="text" name="placa">
                        <label class="materiliaze-black-text" for="placa"><i class="material-icons left">date_range</i>Placa do veículo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="modelo_veiculo" type="text" name="modelo_veiculo">
                        <label class="materiliaze-black-text" for="modelo_veiculo"><i class="material-icons left">directions_car</i>Modelo do veículo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="ano_veiculo" type="text" name="ano_veiculo">
                        <label class="materialize-black-text" for="ano_veiculo"><i class="material-icons left">event</i>Ano do veículo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="chassi" type="text" name="chassi">
                        <label class="materiliaze-black-text" for="chassi"><i class="material-icons left">image_aspect_ratio</i>Chassi</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="marca_veiculo" type="text" name="marca_veiculo">
                        <label class="materialize-black-text" for="marca_veiculo"><i class="material-icons left">more</i>Marca do veículo</label> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="cod_renavam" type="text" name="cod_renavam">
                        <label class="materialize-black-text" for="cod_renavam"><i class="material-icons left">image_aspect_ratio</i>Código Renavam</label> 
                    </div>
                </div>

                <div class="row center-align">
                    <button class="btn waves-effects waves-light" type="submit" name="btn_salvar"><i class="material-icons right">send</i>Salvar
                    </button><br>
                    <br><a href="gerente.php" class="btn red">Voltar</a>
                </div>
		
            </form>
        </div>
    </section>



<?php include_once ("includes/footer.php"); ?>