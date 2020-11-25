<?php include_once ("includes/header.php");?>
<section class="">
        <div class="row">
            <form action="salvar_solicitacao1.php" name="form_solicitacao" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Solicitar Veiculo</h4>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="solicitante" type="text" name="solicitante" data-length="10">
                        <label class="materiliaze-black-text" for="solicitante"><i class="material-icons left">account_circle</i>Solicitante</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="data_da_solicitacao" type="date" name="data_da_solicitacao">
                        <label class="materiliaze-black-text" for="data_da_solicitacao"><i class="material-icons left">event</i>Data da solicitacao</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <label class="materialize-black-text" name="veiculos" for="veiculos">Veiculos</label><br>
                        <p>
                            <label>
                                <input class="with-gap" name="veiculos" type="radio" value="Carro"/>
                                <span>Carro</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="veiculos" type="radio" value="Caminhonete"/>
                                <span>Caminhonete</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="veiculos" type="radio" value="UM"/>
                                <span>Unidade Movel</span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="local_de_saida" type="text" name="local_de_saida">
                        <label class="materiliaze-black-text" for="local_de_saida"><i class="material-icons left">place</i>Local de saida</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="local_de_destino" type="text" name="local_de_destino">
                        <label class="materiliaze-black-text" for="local_de_destino"><i class="material-icons left">pin_drop</i>Local de destino</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="solicitacao_dia" type="date" name="solicitacao_dia">
                        <label class="materiliaze-black-text" for="solicitacao_dia"><i class="material-icons left">event</i>Solicitação para o dia:</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="horario_de_saida" type="time" name="horario_de_saida">
                        <label class="materiliaze-black-text" for="horario_de_saida"><i class="material-icons left">access_alarm</i>Horário de saída</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="previsao_de_retorno" type="time" name="previsao_de_retorno">
                        <label class="materiliaze-black-text" for="previsao_de_retorno"><i class="material-icons left">access_alarm</i>Previsão de retorno</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="usuarios_do_veiculo" type="text" name="usuarios_do_veiculo">
                        <label class="materiliaze-black-text" for="usuarios_do_veiculo"><i class="material-icons left">account_circle</i>Usuários do veiculo</label>
                    </div>
                </div>
                
                <div class="row center-align">
                    <button class="btn waves-effects waves-light" type="submit" name="enviar"><i class="material-icons right">send</i>Enviar
                    </button><br>
                    <br><a href="solicitante.php" class="btn red">Voltar</a>
                </div>
                
            </form>
        </div>
</section>
<?php include_once ("includes/footer.php");?>