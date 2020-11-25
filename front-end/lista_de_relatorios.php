<?php include_once ("includes/header.php");?>
<section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Lista de relatorios</h3>
		<table class="stripped">
			<thead>
				<tr>
					<th>Data</th>
					<th>Horário de saída</th>
					<th>Horário de chegada</th>
					<th>Origem</th>
					<th>Destino</th>
					<th>KM inicial</th>
					<th>KM final</th>
					<th>Observações</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include_once ("conexao.php");
					//Listagem dos relatorios cadastrados no banco de dados

					$sqlListarRelatorio = "SELECT * FROM relatorio";
					$resultadoRelatorio = mysqli_query ($conn, $sqlListarRelatorio);

					if(mysqli_num_rows($resultadoRelatorio)>0):

						while($dadoRelatorio = mysqli_fetch_array($resultadoRelatorio)):
				?>
				<tr>
					<td><?php echo $dadoRelatorio['data_relatorio']; ?></td>
					<td><?php echo $dadoRelatorio['horario_saida']; ?></td>
					<td><?php echo $dadoRelatorio['horario_chegada']; ?></td>
					<td><?php echo $dadoRelatorio['origem']; ?></td>
					<td><?php echo $dadoRelatorio['destino']; ?></td>
					<td><?php echo $dadoRelatorio['km_inicial']; ?></td>
					<td><?php echo $dadoRelatorio['km_final']; ?></td>
					<td><?php echo $dadoRelatorio['observacoes']; ?></td>
					<?php
						//Fim do while
						endwhile;
					//Fim do if
					endif;
				?>
			</tbody>
		</table>
		<br>
		 <a href="registrar_veiculo.php"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
		 <a href="gerente.php" class="btn red">Voltar</a>
	</section>
   </section>
	
	          

<?php
include_once "includes/footer.php"
?>