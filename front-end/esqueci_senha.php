<?php include_once ("includes/header.php");?>
<script>
    function validarSenha() {
        if (document.form_recuperar_senha.nova_senha.value == null || document.form_recuperar_senha.nova_senha.value.length <= 5) {
                alert('Preencha o campo confirmar senha com no mínimo 6 caracteres e conforme a senha digitada acima');
                document.form_recuperar_senha.nova_senha.focus();
                return false;
            }
            if (document.form_recuperar_senha.conf_nova_senha.value != document.form_recuperar_senha.nova_senha.value) {
                alert('Confirmar senha não corresponde à senha');
                document.form_recuperar_senha.conf_nova_senha.focus();
                return false;
            }
    }

</script>
<section class="">
        <div class="row">
            <form action="login.php" name="form_recuperar_senha" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Criar uma nova senha</h4>
                    <p><strong>Preencha os campos abaixo para mudar sua senha.</strong></p>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="nova_senha" type="password" name="nova_senha">
                        <label class="materialize-black-text" for="nova_senha"><i class="material-icons left">vpn_key</i>Nova senha</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="conf_nova_senha" type="password" name="conf_nova_senha">
                        <label class="materialize-black-text" for="conf_nova_senha"><i class="material-icons left">vpn_key</i>Confirmar nova senha</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="cpf_2" type="text" name="cpf_2">
                        <label class="materialize-black-text" for="cpf_2"><i class="material-icons left">subtitles</i>CPF</label>
                    </div>
                </div>
                
                <div class="row center-align">
                    <button onclick="return validarSenha()" class="btn waves-effect waves-light" type="submit" name="confirmar">Confirmar<i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>
    </section>
    <script>
        const masks = {
            cpf_2 (value) {
                return value
                .replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})/, '$1-$2')
                .replace(/(-\d{2})\d+?$/, '$1')
            }
        }
        document.querySelectorAll('input').forEach(($input) => {
            const field = $input.name

            $input.addEventListener('input', (e) => {
                e.target.value = masks[field](e.target.value)
            }, false)
        })
    </script>
<?php include_once ("includes/footer.php");?>