
<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if(!empty($btnLogin)){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $senha = md5($senha);
	//echo "$funcionario - $senha";
	if(!empty($email) and !empty($senha)){
		//Gerar a senha criptografa
		//echo md5($senha)."<br>";
		//Pesquisar o usuário no BD
		
        $result_funcionario = "SELECT idfuncionario, nome, email, senha, cargo FROM funcionario WHERE email='$email' LIMIT 1";
		
        $resultado_funcionario = mysqli_query($conn, $result_funcionario);
		
        
        if($resultado_funcionario){
			$row_funcionario = mysqli_fetch_assoc($resultado_funcionario);
			
            if($senha === $row_funcionario['senha']){
                
				$_SESSION['idfuncionario'] = $row_funcionario['idfuncionario'];
				$_SESSION['nome'] = $row_funcionario['nome'];
				$_SESSION['email'] = $row_funcionario['email'];
				$_SESSION['cargo'] = $row_funcionario['cargo'];
                //header("Location: gerente.php");
                
                if($row_funcionario['cargo'] == 'G' || $row_funcionario['cargo'] == 'g'){
                    header("Location: gerente.php");
                }
                if($row_funcionario['cargo'] == 'M' || $row_funcionario['cargo'] == 'm')
                {
                    header("Location: motorista.php");
                }
                if($row_funcionario['cargo'] == 'C' || $row_funcionario['cargo'] == 'c')
                {
                    header("Location: solicitante.php");
                }
                else{
                     $_SESSION['msg'] = "Não foi dessa vez!";
                }
				
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";//.$row_funcionario['cargo'];
				header("Location: index.php");
                //echo "$email - $senha";
                
               /* echo "<br>";
                
                echo $row_funcionario['email']." - ";
                echo $row_funcionario['senha'];*/
                    
			}
		}
	}else{
		$_SESSION['msg'] = "Não clicou com o botão logar!";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: index.php");
}


