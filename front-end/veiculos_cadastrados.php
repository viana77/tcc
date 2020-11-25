<?php include_once ("includes/header.php");?>
<section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Lista de veiculos da instituição</h3>
		<table class="stripped">
			<thead>
				<tr>
					<th>Placa</th>
					<th>Modelo</th>
					<th>Ano</th>
					<th>Chassi</th>
					<th>Marca</th>
					<th>Código Renavam</th>
					

				</tr>
			</thead>
			<tbody>
				<?php
				include_once ("conexao.php");
					//Listagem dos relatorios cadastrados no banco de dados

					$sqlListarVeiculos = "SELECT * FROM veiculo";
					$resultadoVeiculos = mysqli_query ($conn, $sqlListarVeiculos);

					if(mysqli_num_rows($resultadoVeiculos)>0):

						while($dadoVeiculo = mysqli_fetch_array($resultadoVeiculos)):
				?>
				<tr>
					<td><?php echo $dadoVeiculo['placa_veiculo']; ?></td>
					<td><?php echo $dadoVeiculo['modelo_veiculo']; ?></td>
					<td><?php echo $dadoVeiculo['ano_veiculo']; ?></td>
					<td><?php echo $dadoVeiculo['chassi']; ?></td>
					<td><?php echo $dadoVeiculo['marca_veiculo']; ?></td>
					<td><?php echo $dadoVeiculo['cod_renavam']; ?></td>
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