<?php include_once ("includes/header.php");?>
<section class="">
        <div class="row">
            <form action="salvar_relatorio1.php" name="form_cadastro" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Relatório de viagem</h4>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="data_relatorio" type="date" name="data_relatorio">
                        <label class="materiliaze-black-text" for="data"><i class="material-icons left">date_range</i>Data</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="horario_saida" type="time" name="horario_saida">
                        <label class="materiliaze-black-text" for="horario_saida"><i class="material-icons left">access_alarm</i>Horário saída</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="horario_chegada" type="time" name="horario_chegada">
                        <label class="materialize-black-text" for="horario_chegada"><i class="material-icons left">event</i>Horário chegada</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="origem" type="text" name="origem">
                        <label class="materiliaze-black-text" for="origem"><i class="material-icons left">place</i>Origem</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="destino" type="text" name="destino">
                        <label class="materialize-black-text" for="destino"><i class="material-icons left">pin_drop</i>Destino</label> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="km_inicial" type="text" name="km_inicial">
                        <label class="materialize-black-text" for="km_inicial"><i class="material-icons left">speed</i>KM Inicial</label> 
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="km_final" type="text" name="km_final">
                        <label class="materialize-black-text" for="km_final"><i class="material-icons left">speed</i>KM Final</label> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="observacoes" type="text" name="observacoes">
                        <label class="materialize-black-text" for="observacoes"><i class="material-icons left">search</i>Observações</label> 
                    </div>
                </div>

                </div>

				<div class="row center-align">
                    <button class="btn waves-effects waves-light" type="submit" name="cadastrar"><i class="material-icons right">send</i>Enviar
                    </button><br>
                    <br><a href="motorista.php" class="btn red">Voltar</a>
                </div>
            </form>
        </div>
    </section>
<?php include_once ("includes/footer.php");?>