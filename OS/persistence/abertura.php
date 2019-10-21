<?php
	require_once('./controller.php');
?>
<div class="titulo"><h4>Abertura de Chamados</h4></div>
<div class="container">
	<form action="./crud.php" method="GET">
		<div class="loja">
			<label>Loja</label><br>
			<select required="required" name="id">
				<option></option>
				<?php foreach ($var_loja as $row) { ?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['loja'];?></option>	
				<?php }?>
			</select>
		</div>
		<div class="tecnico" >
			<label>Técnico</label><br>

			<select required="required" name="id_tecnico">
			 <option></option>
					<?php foreach ($var_tec as $row) {?>
			   	<option value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
					<?php }?>
			 </select>
		</div>
		<div class="solicitante">
			<label>Solicitante</label><br>
			<input class="input" type="text" name="solicitante" placeholder="solicitante" required="">
		</div>
		<div class="prioridade">
			<label>Prioridade</label><br>
			<select required="required" name="id_priore">
				<option></option>
				<?php foreach ($var_priore as $row) {?>
					<option value="<?php echo $row['id'];?>"><?php echo $row['prioridade'];?></option>
				<?php }?>
			</select>
		</div>
		<div class="data">
			<label>Data Chamado</label><br>
			<input class="input" type="text" readonly name="data" value="<?php 
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');
			echo $date;?>">
		</div>
		<div class="mensagem">
			<label>Solicitação do Cliente</label><br>
			<textarea rows="4" cols="50" class="input" name ="defeito_reclamado" placeholder="Descreva as informações passadas pelo usuario" maxlength="255">
			</textarea>
		</div>
		<div>
			<input type="hidden" name="status" value="1">
			<input type="hidden" name="status_chamado" value="4">
		</div>
		<div class="botao_fechar">
			<input class="button" type="submit" name=""  value="Gerar Chamado">
		</div>
		
	</form>
</div>

<style>
	.button{
	padding:5px 15px;
	background: #006400;
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
		margin-bottom: -10px;
		display: inline-block;
        justify-content: center;
		font-family: Helvetica;
		background-color: green;
		text-align: center;
		width: 70%;
		margin-left:  15%;
		border:solid 1px;
	}
	.container
	{
		display: inline-block;
		width:70%;
		margin: 20px 15%;
		border: solid 1px;
	}
	.data{
		display: inline-block;
		width:20%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.loja{
		display: inline-block;
		width:20%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.tecnico{
		display: inline-block;
		width:22.7%;
		background-color: #A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 27%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.prioridade{
		display: inline-block;
		width: 17%;
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
	}
	@media screen and (max-width: 1024px){
		.titulo{
		margin-bottom: -10px;
		display: inline-block;
        justify-content: center;
		font-family: Helvetica;
		background-color: green;
		text-align: center;
		width: 100%;
		margin-left:  2%;
		border:solid 0px;
	}
		.container
	{
		display: inline-block;
		width:100%;
		margin: 10px;
		border: solid 0;
	}
		.loja{
		display: inline-block;
		width: 98%;

	}
	.tecnico{
		display: inline-block;
		width: 98%;

	}
	.solicitante{
		display: inline-block;
		width:  98%;
		
		
	}
	.prioridade{
		display: inline-block;
		width:  98%;
		
	}
	.mensagem{
		display: inline-block;
		width:  98%;
		
	}
	.estoque{
		display: inline-block;
		width:  98%;
		
	}
	.chamado{
		display: inline-block;
		width: 98%;
	
	}
	
</style>