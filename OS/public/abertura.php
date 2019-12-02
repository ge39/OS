<?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>

<div class="titulo"><p>ABERTURA DE CHAMADO</p></div>
<div class="container">
	<form action="../persistence/crud.php" method="GET">
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
					<option class = "datachamado" value="<?php echo $row['id'];?>"><?php echo $row['prioridade'];?></option>
				<?php }?>
			</select>
		</div>
		<div class="data">
			<label>Data Chamado</label><br>
			<input class="datachamado" type="text" readonly name="data" value="<?php 
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');
			echo $date;?>">
		</div>
		<div class="solicitacao">
			<label>Solicitação do Cliente</label><br>
			<textarea rows="4" cols="50" class="input" name ="defeito_reclamado" placeholder="Descreva as informações passadas pelo usuario" maxlength="155">
			</textarea>
		</div>
		<div>
			<input type="hidden" name="status" value="1">
			<input type="hidden" name="status_chamado" value="4">
		</div>
		<div class="botao_fechar">
			<input class="button" type="submit" name=""  value="Gerar Chamado">
		</div>
		<hr>
	</form>
</div>

<style>
	.datachamado{
		width: 120px;
	}
	.button{
	padding:5px 15px;
	background: #006400;
	color: #FFF;
	border-radius: 10px;
	}
	.botao_fechar{
		display: inline-block;
		width:99%;
		background-color:#2E8B57; 
		padding: 10px;
		margin:  3px 4px;
		height: 50px;
		padding: 10px;
		text-align: right;
	}
	.titulo{
		margin-bottom: -10px;
		margin-top: 20px;
		margin-left:  15%;
		font-weight: bold;
		font-family: Poppins;
		background-color: #2E8B57;
		text-align: center;
		width: 70%;
		height: 50px;
		padding: 10px;
		letter-spacing: 10px;
	}
	.container
	{
		display: inline-block;
		width:70%;
		margin: 15px 15%;
		border: solid 1px;
		padding: 10px;
		border: solid 1px lightgray;
	}
	.data{
		display: inline-block;
		width:15%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.loja{
		display: inline-block;
		width:15%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.tecnico{
		display: inline-block;
		width:20.7%;
		background-color: #A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 28.3%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.prioridade{
		display: inline-block;
		width: 15%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	
	.solicitacao{
		display: inline-block;
		width: 99%;
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
		margin: 10px;
		display: inline-block;
        justify-content: center;
		font-family: Helvetica;
		background-color: #A9F5A9;
		text-align: center;
		width: 98%;
		margin-left:  1%;
		border:solid 0px;
	}
		.container
	{
		display: inline-block;
		margin:0 10px;
		border: solid 0;
		width: 98%;
	}
		.loja{
		display: inline-block;
		width:100%;
		background-color:#A9F5A9; 
		margin-left: -5px;
		height:0 auto;

	}
	.tecnico{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
	}
	.solicitante{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
		
		
	}
	.data{
		width: 100%;
		margin-left: -5px;
	}
	.prioridade{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
		
	}
	.solicitacao{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
		
	}
	.estoque{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
		
	}
	.chamado{
		display: inline-block;
		width: 100%;
		margin-left: -5px;
		padding: 10px;

	}
	.botao_fechar{
		display: inline-block;
		width:100%;
		margin-left: -5px;
	}
	
</style>