<?php include_once ("includes/header.php");?>
<script type="text/javascript">
    function validar() {
     /*var email = document.form_login.email.value;
      var senha = formlogin.senha.value;*/

     /* if( document.form_cadastro.nome.value == '' || document.form_cadastro.nome.value.length < 4){
                alert("Preencha o campo nome");
                document.form_cadastro.nome.focus();
                return false;
            }*/          
      if (document.form_login.email.value == null || document.form_login.email.value.indexOf('@') == -1) {
        alert('Preencha o campo E-mail Institucional.');
        document.form_login.email.focus();
        return false;
      }
      if (document.form_login.senha.value == null || document.form_login.senha.value.length <= 2) {
        alert('Preencha o campo senha com no mínimo 6 caracteres.');
        document.form_login.senha.focus();
        return false;
      }
      return true;
    }
  </script>
    <section class="">
        <div class="row">
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
            <form action="salvarLogin.php" name="form_login" method="POST" class="col s12">
                <header class="row center-align">
                    <h4>Login</h4>
                    <p><strong>Preencha os campos abaixo para realizar o login.</strong></p>
                </header>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="email" type="email" name="email">
                        <label class="materialize-black-text" for="email"><i class="material-icons left">email</i>E-mail Institucional</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6 offset-m3">
                        <input id="senha" type="password" name="senha">
                        <label class="materialize-black-text" for="senha"><i class="material-icons left">vpn_key</i>Senha</label>
                    </div>
                </div>

                <div class="row center-align">
                    <a href="esqueci_senha.php">Esqueci minha senha</a>
                </div>

                <div class="row center-align">
                   <button onclick="return validar()" class="btn waves-effect waves-light" type="submit" name="btnLogin" value="ok">Logar<i class="material-icons right">send</i>
                   </button>
                </div>

                <div class="row center-align">
                    <p><strong>Não está cadastrado?</strong></p>
                    <a href="cadastro.php">Realizar cadastro</a>
                </div>
            </form>
        </div>
    </section>
<?php include_once ("includes/footer.php");?>