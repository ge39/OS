<?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
	$id = $_GET['id'];
?>
<div class="titulo">
	<p>REABRIR CHAMADO</p>
</div>
<div class="container">
<?php foreach ($var_select as $row) {?>
	<form action="../persistence/crud.php" method="get">
		<!-- codigo editar-->
		<input type="hidden" name="code" value="3">
		<input type="hidden" name="status" value="4">
		<div class="id">
			<label>Id Chamado</label><br>
			<input class="input" type="text" name="id_chamado" value="<?php echo $row['id'];?>" readonly>
		</div>
		<div class="id">
			<label>Data Chamado</label><br>
			<input class="input" type="text" name="" value="<?php echo date('d/m/Y', strtotime($row['data_abertura_chamado']));?>" readonly>
		</div>
		<div class="loja">
			<label>Loja</label><br>
			<input class="input" type="text" name="loja"  value ="<?php echo $row['loja'];?>" readonly>
		</div>
		<div class="solicitante">
			<label>Solicitante</label><br>
			<input class="input" type="text" name="solicitante" value="<?php echo $row['solicitante'];?>" readonly>
		</div>
		<div class="tecnico">
			<label>Técnico</label><br>
			<option ><?php echo $row['nome'];?></option>
			<select name="id_tecnico">
				<?php foreach ($var_tec as $tecnico) { ?>
				<option value ="<?php echo $tecnico['id'];?>">
					<?php echo $tecnico['nome'];?> 
					<?php } ?>
				</option>
			</select>
		</div>
		<div class="prioridade">
			<label>Prioridade</label><br>
			<input type="text" name="priore" value="<?php echo $row['prioridade'];?>">
			</div>
		<div class="status_chamado">
			<label>Status Chamado</label><br>
			<option><?php echo $row['descricao_chamado'];?></option>
			<select required="required" name="status_chamado">
				<option></option>
				<?php foreach ($var_status_chamado as $status) { ?>
					<?php echo $status['id_status_chamado'];?>
					<option value="<?php echo $status['id'];?>"><?php echo $status['descricao_chamado'];?></option>
				<?php }?>

			</select>
		</div>
		<div class="data">
			<label>Data Fechamento</label><br>
			<input class="input" type="text" name="data_fechamento" value="<?php 
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');
			echo $date;?>">
		</div>
		<div class="defeito_reclamado">
			<label>Defeito Reclamado</label><br>
			<input class="input" type="text" name="defeito_reclamado" readonly required value="<?php echo $row['reclamado'];?>">
		</div>
		<div class="avaliacao_tecnico">
			<label>Avaliação Técnica</label><br>
			<input class="input" type="text" name="avaliacao" maxlength="150" required="" value="<?php echo $row['avaliacao_tecnico'];?>">
		</div>
		<div class="avaliacao_tecnico">
			<label>Material Utilizado</label><br>
			<div class="boxes">	 	
			 	<?php foreach ($var_estoque as $etq) { ?>
				<input type="checkbox" name="<?php echo $etq['id'];?>"><?php echo $etq['item'];?>

				<?php }?>
			</div>
			
		</div>
		<div class="mensagem">
			<label>Solução Técnica</label><br>
			<textarea  class="input" name = "solucao" cols="4" rows="5" maxlength="150" required=""><?php echo $row['solucao'];?></textarea>
			
			</div>
		<div class="observacao">
			<label>Qual a Pendência</label><br>
			<input class="input" type="text" name="pendencia" maxlength="140" value = "<?php echo $row['pendencia'];?>"required="">
		</div>
		
		<div class="botao_fechar">
			<input class = "button"type="submit" name=""  value="Encerrar Chamado">	
		</div>
	
	</form>
<?php }?>

</div>
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>
<style>
	.button{
	padding:5px 15px;
	background: #FF6347;
	color: #FFF;
	}
	.botao_fechar{
		display: inline-block;
		width:96%;
		background-color:#2E8B57; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
		text-align: right;
	}
	.titulo{
		margin-bottom: -10px;
		display: inline-block;
        justify-content: center;
		font-family: Poppins;
		background-color: #2E8B57;
		text-align: center;
		width: 70%;
		margin-left:  15%;
		letter-spacing: 5px;
		color: white;
	}
	.container
	{
		display: inline-block;
		width:70%;
		margin: 20px 15%;
		border: solid 1px;
		font-weight: bold;
	}
	.id{
		display: inline-block;
		width:11.8%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.loja{
		display: inline-block;
		width:27%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 36%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.tecnico{
		display: inline-block;
		width:27%;
		background-color: #A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.prioridade{
		display: inline-block;
		width: 27%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.status_chamado{
		display: inline-block;
		width: 13%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.data{
		display: inline-block;
		width:19.6%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.defeito_reclamado{
		display: inline-block;
		width: 97%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.mensagem{
		display: inline-block;
		width: 97%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width:97%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.observacao{
		display: inline-block;
		width: 97%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.estoque{
		display: inline-block;
		width: 97%;
		background-color:#A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.chamado{
		display: inline-block;
		width: 97%;
		background-color: #A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.input{
		width: 100%;
		text-align: left;
	}
	.solucao{
		width: 100%;
		height: 50px;
		text-align: left;
	}
	@media screen and (max-width: 1024px){
		.boxes{
			background-color: white;
			display: inline-block;
			flex-direction: column;
			width: 100%;
			height: 0 auto;
			padding: 10px 20px;
		}
	.button{
		padding:5px 15px;
		background: #FF6347;
		color: #FFF;
	}
	.botao_fechar{
		display: inline-block;
		width:97%;
		background-color:#2E8B57; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
		text-align: right;
	}
	.titulo{
		width: 97%;
		display: inline-block;
        font-family: Helvetica;
		border:solid 0px;
		margin: 10px;
		height: 40px;
		padding: 10px;
	}
		.container
	{
		display: inline-block;
		width:99%;
		margin: 0 10px;
		border: solid 1px lightgray;
	}
	.id{
		display: inline-block;
		width:97%;
		
	}
		.loja{
		display: inline-block;
		width:97%;

	}
		.solicitante{
		display: inline-block;
		width:97%;
	}
	.tecnico{
		display: inline-block;
		width: 97%;

	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width: 97%;
		
	}

	.observacao{
		display: inline-block;
		width:97%;
		
		
	}
	.prioridade{
		display: inline-block;
		width: 97%;
		
	}
	.status_chamado{
		display: inline-block;
		width: 97%;
		
	}
	.data{
		
		width:97%;
		
	}
	.defeito_reclamado{
		
		width: 97%;
		
	}
	.mensagem{
		display: inline-block;
		width: 97%;
		
	}
	.estoque{
		display: inline-block;
		width: 97%;
		
	}
	.chamado{
		display: inline-block;
		width: 97%;
	
	}
	
</style>