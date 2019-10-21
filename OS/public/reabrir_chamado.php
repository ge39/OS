<?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
	$id = $_GET['id'];
?>
<div class="titulo">
	<p>REABRIR  CHAMADOS</p>
</div>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="container">
	<?php foreach ($var_select as $row) {?>
		<form action="../persistence/crud.php" method="get">
			
			<!-- codigo editar-->
			<input type="hidden" name="code" value="3">
			<div class="id">
				<label>Id</label><br>
				<input class="input" type="text" name="id_chamado" value="<?php echo $row['id'];?>" readonly>
			</div>
			<div class="id">
				<label>Chamado</label><br>
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
				<select name="id_tecnico" required="">
					<option value= "3">Validando</option>
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
					<select name="status_chamado" required="">
					<option value="3">Pendente</option>
					<option value="1">Atendido</option>
					<option value="2">Em Atendimento</option>
					
				</select>
			</div>
			<div class="data">
				<label>Data Atual</label><br>
				<input class="input" type="text" name="atualizacao" value="<?php 
				date_default_timezone_set('America/Sao_Paulo');
				$date = date('d-m-Y H:i');
				echo $date;?>">
			</div>
			<div class="defeito_reclamado">
				<label>Defeito Reclamado</label><br>
				<textarea class ="input" rows="4" cols="5" name="defeito_reclamado"><?php echo trim($row['reclamado']);?></textarea>
			</div>
			<div class="avaliacao_tecnico">
				<label>Avaliação Técnica</label><br>
				<input class="input" type="text" name="avaliacao" maxlength="150" value= "<?php echo $row['avaliacao_tecnico'];?>">
			</div>
			<div class ="produto_util" >
				<p>Ìtens Utilizado no Chamado</p>
		       	<?php foreach ($var_utilizado as $util) { ?>
					<div class="resultado">
						<ul>
							<li>
								<?php echo"Item: ". $util['descricao'];?>
							</li>
							<li>
								<?php echo "Qtde: ".$util['qtde'];?>
							</li>
						</ul>
				 	</div>
				 <?php }?>	
			</div>
			<div class="mensagem">
				<label>Solução Técnica</label><br>
				<textarea class ="input" rows="4" cols="5" maxlength="150" name="solucao"><?php echo $row['solucao'];?></textarea>
			</div>
			<div class="pendencia">
				<label>Qual a Pendência</label><br>
				<input class="input" type="text" name="pendencia" placeholder="Pendenciacao técnica" maxlength="140" value = "<?php echo $row['pendencia'];?>">
			</div>
			
			<div class="botao_fechar">
				<input class = "button" type="submit" name=""  value="Reabrir Chamado">	
			</div>

		</form>
	<?php }?>

</div>
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>

<style>
	.produto_util{
		display: inline-block;
		direction: column;
		width: 98.5%;
		background-color: lightgreen;
		margin: -2px 5px;
		padding: 5px;

	}
	.utilizados{
		width: 95%;
	}
	.resultado{
		display: inline-block;
		direction: column;
		background-color: #ccffcc;
		width: 45%;
		padding:  1% 5.5%;
		margin: 1% 1%;
		}
	@media only screen and (max-width: 1024px) {

	.container{
		display: inline-block;
		width:98.5%;
		font-weight: bold;
		margin: -1px 5px;
		padding: 5px;
		border: solid 1px lightgray;
		font-family: Poppins;
		font-size: 14px;
	}
	.titulo{
		display: inline-block;
        justify-content: center;
		font-family: Poppins;
		background-color: #2E8B57;
		text-align: center;
		width: 100%;
		padding: 10px;
		height: 40px;
		margin: 5px 0;
		letter-spacing: 5px;
		color: white;
	}
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
	
		.id{
		display: inline-block;
		width:99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.loja{
		display: inline-block;
		width:99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.tecnico{
		display: inline-block;
		width:99%;
		background-color: #A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.prioridade{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.status_chamado{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.data{
		display: inline-block;
		width:99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.defeito_reclamado{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.mensagem{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width:99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.pendencia{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.estoque{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.chamado{
		display: inline-block;
		width: 99%;
		background-color: #A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.input{
		width: 100%;
		font-size: 25px;
	}

}
@media only screen and (min-width: 1024px) {
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 5px 0;
	}

	.button{
		padding:5px 15px;
		background: #006400;
		color: #FFF;
	}
	.botao_fechar{
		display: inline-block;
		width:99%;
		background-color:#2E8B57; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
		text-align: right;
	}
	.titulo{
		
		display: inline-block;
       	font-family: Poppins;
		background-color: #2E8B57;
		text-align: center;
		width: 70%;
		height: 40px;
		margin: 5px 15%;
		letter-spacing: 5px;
		color: white;
	}
	.container
	{
		display: inline-block;
		width:70%;
		margin: 0px 15%;
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
		width:31%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 40%;
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
		width: 18%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.data{
		display: inline-block;
		width:23%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.defeito_reclamado{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.mensagem{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width:99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.pendencia{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.estoque{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.chamado{
		display: inline-block;
		width: 99%;
		background-color: #A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.input{
		width: 100%;
	}
	@media screen and (max-width: 768px){
	.botao_produto{
		margin-left: -0.5%;
		margin-top: -5%;
	}
	.botao_produto{
		margin-left: -3%;
		margin-top: -3%;
		
	}
	.resultado{
		width: 49.6%;
		
	}
}
@media screen and (max-width: 574px){
	.botao_r_produto{
		margin-left: 20%;
		margin-top: -5%;
	}
	.botao_produto{
		margin-left: -3%;
		margin-top: -3%;
		
	}
	.resultado{
		width: 32.5%;
		
	}
}
@media screen and (min-width: 320px){
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 5px 0;
	}
	

}
@media screen and (min-width: 375px){
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 3px 0;
	}
		
}
@media screen and (min-width: 411px){
		.resultado{
		width: 49%;
		padding: 20px;
		margin: 3px 0;
	}
		
}
@media screen and (min-width: 568px){
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
		
}
@media screen and (min-width: 731px){
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
	
}
@media screen and (min-width: 768px){
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;

	}
		
}
@media screen and (min-width: 822px){
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
	
	}
}
	
</style>