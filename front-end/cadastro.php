<?php include_once ("includes/header.php");?>
<script>
        function validaCadastro(){
            
            if( document.form_cadastro.nome.value == ''){
                alert("Preencha o campo nome");
                document.form_cadastro.nome.focus();
                return false;
            }          
           if (document.form_cadastro.sobre_nome.value == ''){
               alert("Preencha o campo sobre nome");
               document.form_cadastro.sobre_nome.focus();
               return false;
           }
           if (document.form_cadastro.data_nascimento.value == ''){
               alert("Preencha o campo data de nascimento");
               document.form_cadastro.data_nascimento.focus();
               return false;
           }
           if (document.form_cadastro.cpf.value == ''){
               alert("Preencha o campo CPF");
               document.form_cadastro.cpf.focus();
               return false;
           }
           if(document.form_cadastro.celular.value == ''){
                alert("Preencha o campo celular");
                document.form_cadastro.celular.focus();
                return false;
            }
            if (document.form_cadastro.cargo[0].checked == false && document.form_cadastro.cargo[1].checked == false
            && document.form_cadastro.cargo[2].checked == false){
                alert("Selecione um cargo");
                return false;
            }
           if (document.form_cadastro.email.value == null || document.form_cadastro.email.value.indexOf('@') == -1) {
               alert('Preencha o campo E-mail Institucional.');
               document.form_cadastro.email.focus();
               return false;
            }
            if(document.form_cadastro.celular.value == ''){
                alert("Preencha o campo celular");
                document.form_cadastro.celular.focus();
                return false;
            }
            if (document.form_cadastro.senha.value == null || document.form_cadastro.senha.value.length <= 5) {
                alert('Preencha o campo senha com no mínimo 6 caracteres.');
                document.form_cadastro.senha.focus();
                return false;
            }
            if (document.form_cadastro.sexo[0].checked == false && document.form_cadastro.sexo[1].checked == false
            && document.form_cadastro.sexo[2].checked == false){
                alert("Selecione um gênero correspondente ao seu");
                return false;
            }
            return true;
        }
    </script>
    <section class="">
        <div class="row">
            <form action="salvar_cadastro.php" name="form_cadastro" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Cadastro</h4>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">    
                        <input id="nome" type="text" name="nome">
                        <label class="materiliaze-black-text" for="nome"><i class="material-icons left">account_circle</i>Nome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="sobrenome" type="text" name="sobrenome">
                        <label class="materiliaze-black-text" for="sobrenome"><i class="material-icons left">account_circle</i>Sobrenome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="data_nascimento" type="date" name="data_nascimento">
                        <label class="materialize-black-text" for="data_nascimento"><i class="material-icons left">event</i>Data de nacimento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="cpf" type="text" name="cpf">
                        <label class="materiliaze-black-text" for="cpf"><i class="material-icons left">subtitles</i>CPF</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="celular" type="text" name="celular">
                        <label class="materialize-black-text" for="celular"><i class="material-icons left">smartphone</i>  Celular</label> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <label class="materialize-black-text" for="cargo">Cargo</label><br>
                        <p>
                            <label>
                                <input class="with-gap" name="cargo" value="G" type="radio"/>
                                <span>Gerente</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="cargo" value="M" type="radio"/>
                                <span>Motorista</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="cargo" value="C" type="radio"/>
                                <span>Funcionario comum</span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="email" type="email" name="email">
                        <label class="materialize-black-text" for="email"><i class="material-icons left">email</i>E-mail institucional</label> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="senha" type="password" name="senha">
                        <label class="materialize-black-text" for="senha"><i class="material-icons left">vpn_key</i>Senha</label> 
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <label class="materialize-black-text" for="sexo">Sexo</label><br>
                        <p>
                            <label>
                                <input class="with-gap" name="sexo" value="F" type="radio"/>
                                <span>Feminino</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="sexo" value="M" type="radio"/>
                                <span>Masculino</span>
                            </label>
                        </p>

                        <p>
                            <label>
                                <input class="with-gap" name="sexo" value="O" type="radio"/>
                                <span>Outro</span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="row center-align">
                    <button onclick="return validaCadastro()" class="btn waves-effects waves-light" type="submit" name="btn_cadastrar"><i class="material-icons right">send</i>Cadastrar
                    </button><br>
                    <br><a href="index.php" class="btn red">Voltar</a>
                </div>
            </form>
        </div>
    </section>
    <script>
        const masks = {
            cpf (value) {
                return value
                .replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})/, '$1-$2')
                .replace(/(-\d{2})\d+?$/, '$1')
            },

            celular (value) {
                return value
                .replace(/\D/g, '')
                .replace(/(\d{2})(\d)/, '($1) $2')
                .replace(/(\d{5})(\d)/, '$1-$2')
                .replace(/(-\d{4})(\d)+?$/, '$1')

            },
        }

        document.querySelectorAll('input').forEach(($input) => {
            const field = $input.name

            $input.addEventListener('input', (e) => {
                e.target.value = masks[field](e.target.value)
            }, false)
        })
        
    </script>
<?php include_once ("includes/footer.php");?>