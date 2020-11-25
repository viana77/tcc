<?php include_once ("includes/header.php");?>
<section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Solicitações</h3>
		<table class="stripped">
			<thead>
				<tr>
					<th>Solicitante</th>
					<th>Data da solicitação</th>
					<th>Veiculo</th>
					<th>Local de saída</th>
					<th>Local de destino</th>
					<th>Solicitação para o dia</th>
					<th>Horário de saída</th>
					<th>Previsão de retorno</th>
					<th>Passageiros secundarios</th>
					<th>Status</th>
					<?php
                    
                        if(empty($_GET['solicitacoesG'])){
                            $_GET['solicitacoesG'] = 1;
                        }
                    
                        if($_GET['solicitacoesG'] == 'g' ){
                            echo "\n<th>Autorização</th>";
					   }
                    ?>
				</tr>
			</thead>
			<tbody>
				<?php
				include_once ("conexao.php");
					//Listagem das solicitações cadastrados no banco de dados

					$sqlListarSolicitacoes = "SELECT * FROM solicitacao";
					$resultadoSolicitacao = mysqli_query ($conn, $sqlListarSolicitacoes);

					if(mysqli_num_rows($resultadoSolicitacao)>0):

						while($dadoSolicitacao = mysqli_fetch_array($resultadoSolicitacao)):
				?>
				<tr>
					<td><?php echo $dadoSolicitacao['solicitante']; ?></td>
					<td><?php echo $dadoSolicitacao['data_da_solicitacao']; ?></td>
					<td><?php echo $dadoSolicitacao['veiculos']; ?></td>
					<td><?php echo $dadoSolicitacao['local_saida']; ?></td>
					<td><?php echo $dadoSolicitacao['local_destino']; ?></td>
					<td><?php echo $dadoSolicitacao['solicitacao_para_dia']; ?></td>
					<td><?php echo $dadoSolicitacao['horario_saida']; ?></td>
					<td><?php echo $dadoSolicitacao['previsao_de_retorno']; ?></td>
					<td><?php echo $dadoSolicitacao['usuarios_do_veiculo']; ?></td>
					<td><?php echo $dadoSolicitacao['status_da_solicitacao']; ?></td>
					
                        <?php  if($_GET['solicitacoesG'] == 'g'): ?>
                            <td>
                                <a href="autorizacao.php?idsolicitacao=<?php echo $dadoSolicitacao['idsolicitacao']; ?>&autorizacao=n">Não</a>
                                <a href="autorizacao.php?idsolicitacao=<?php echo $dadoSolicitacao['idsolicitacao']; ?>&autorizacao=s">Sim</a>
                            </td>
                        <?php endif ?>


					<?php
						//Fim do while
						endwhile;
					//Fim do if
					endif;
				?>
			</tbody>
		</table>
		<br>
		 <a href="solicitacao.php"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
		<a href="solicitante.php" class="btn red">Voltar</a>
		
	</section>
   </section>
	
	          

<?php
include_once "includes/footer.php"
?>