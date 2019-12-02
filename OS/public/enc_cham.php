<?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
	$id = $_GET['id'];
?>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <div class="titulo">
	<p>ENCERRAR CHAMADO</p>
</div>
<div class="container">
	<form action="../persistence/crud.php" method="get">
		<?php foreach ($var_select as $row) {?>			
			<input type="hidden" name="code" value="2">
			<input type="hidden" name="status" value="4">
			<div class="id">
				<label>Id Chamado</label><br>
				<input class="input" type="text" name="id_chamado" value="<?php echo $row['id'];?>" readonly>
			</div>
			<div class="id">
				<label>Data</label><br>
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
				<select name="id_tecnico">      
                                        <option value="<?php echo $row['id_tecnico'];?>"><?php echo $row['nome'];?></option>
					<?php foreach ($var_tec as $tecnico) { ?>
						<option value ="<?php echo $tecnico['id'];?>">
							<?php echo $tecnico['nome'];?> 
					<?php } ?>
						</option>
				</select>
			</div>
			<div class="prioridade">
				<label>Prioridade</label><br>
				<input type="text" name="priore" readonly value="<?php echo $row['prioridade'];?>">
			</div>
			<div class="status_chamado">
				<label>Status</label><br>
				<select required="required" name="status_chamado">
					<option value="5">Fechado</option>
				</select>
			</div>
			<div class="data">
				<label>Data Fechamento</label><br>
				<input class="input" type="text" readonly name="data_fechamento" value="<?php 
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
			<div class ="produto_util" >
				<p>Ìtens Utilizado no Chamado</p>
		       	<?php foreach ($var_utilizado as $util) { ?>
					<div class="resultado">
						<ul>
							<li>
								<?php echo "Item: ".$util['descricao'];?>
							</li>
							<li>
								<?php echo " Qtde: ".$util['qtde'];?>
							</li>
						</ul>
				 			
					</div>
				 <?php }?>	
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
		<?php }?>
	</form>

</div>
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>

<style>
	.produto_util{
		display: inline-block;
		direction: column;
		width: 100%;
		background-color: lightgreen;
		padding: 10px;

	}
	.utilizados{
		width: 95%;
	}
	.resultado{
		display: inline-block;
		direction: column;
		background-color: #ccffcc;
		width: 19.7%;
		padding:  10px 20px;
		margin: 0.1% 0;
	}
	.botao_produto{
		margin-left: -1%;
		margin-top: -9%;
		font-size: 100%;
		width: 100%;
		text-align: center;
	}
	.button{
		padding:5px 15px;
		background: #FF6347;
		color: #FFF;
		display: inline-block;
		direction: column;
                border-radius:10px;
	}
	.botao_fechar{
		display: inline-block;
		width: 100%;
		background-color:#2E8B57; 
		padding: 10px;
		margin:  3px 1px;
		height:0 auto;
		text-align: right;
                
	}
	.titulo{
		margin-bottom: -1%;
		margin-left: 0.6%;
		display: inline-block;
        justify-content: center;
		font-family: Poppins;
		background-color: #2E8B57;
		text-align: center;
		width: 99%;
		height: 10%;
		padding: 1%;
		letter-spacing: 5px;
		color: white;
	}
	.container{
		display: inline-block;
		width:99%;
		margin:  2% 0.6%;
		border: solid 1px lightgray;
		font-weight: bold;
		padding: 0.5%;
		font-family: Poppins;
	}
	.id{
		display: inline-block;
		width:99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:  3px 1px;
		height:0 auto;
	}
	.loja{
		display: inline-block;
		width:99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:  3px 1px;
		height:0 auto;
	}
	.solicitante{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9; 
		padding: 0.5% ;
		margin:3px 1px;
		height:0 auto;
	}
	.tecnico{
		display: inline-block;
		width:99.7%;
		background-color: #A9F5A9;
		padding: 0.5%;
		margin: 3px 1px;
		height:0 auto;
	}
	.prioridade{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9;
		padding: 0.5%;
		margin: 3px 1px;
		height:0 auto;
	}
	.status_chamado{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9;
		padding: 0.5%;
		margin: 3px 1px;
		height:0 auto;
	}
	.data{
		display: inline-block;
		width:99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:  3px 1px;
		height: 0 auto;
	}
	.defeito_reclamado{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9;
		padding: 0.5%;
		margin: 3px 1px;
		height:0 auto;
	}
	.mensagem{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:3px 1px;
		height:0 auto;
	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width:99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:  3px 1px;
		height:0 auto;
	}
	.observacao{
		display: inline-block;
		width: 99.7%;
		background-color:#A9F5A9; 
		padding: 0.5%;
		margin:3px 1px;
		height:0 auto;
	}
	.estoque{
		width: 100%;
		padding:0.5%;
		display: inline-block;
		direction: column;
		height: 0 auto;
		background-color: white;
		margin-left: 0;
	}
	.produto{
		width:  100%;
		margin: 0.5% ;
 		padding: 0.5%;
		display: inline-block;
		direction: column;
		background-color: lightgreen;
		border-bottom: solid lightgray;
		word-spacing: 20px;
	}
	.desc{
		width: 100%;
		margin: 0.5% ;
		padding:0.5%;
		display: inline-block;
		direction: column;
		background-color: lightgreen;
		border-bottom: solid lightgray;
	}
	.dados
	{
		font-weight: normal; word-spacing: 25%;
	}

	.chamado{
		display: inline-block;
		width: 99.7%;
		background-color: #A9F5A9;
		padding: 10px;
		margin:3px 1px;
		height:0 auto;
	}
	.input{
		width: 100%;
		text-align: left;
	}
	.solucao{
		width: 99.7%;
		height: 50px;
		text-align: left;
	}
	@media screen and (min-width: 1024px){
	.botao_produto{
	margin-left: -10%;
	margin-top: -5.8%;
	}
	.container{
	display: inline-block;
	width:80%;
	margin-left: 10%;
	}
	.titulo{
		width: 80%;
		margin-left: 10%;
	}
	.produto{
		margin: 0.5%;
		width:  40%;
	}
	.desc{
		width: 57.5%;
		margin: 0 ;
		border-color: lavender;
	}
	.dados
	{
		font-weight: normal; word-spacing: 35%;
	}
}
@media screen and (max-width: 1024px){
	.botao_produto{
		margin-left: -3%;
		margin-top: -3%;
		
	}
	.resultado{
		width: 49.5%;
		
	}
}
@media screen and (max-width: 768px){
	.botao_produto{
		margin-left: -3%;
		margin-top: -3%;
		
	}
	.resultado{
		width: 49.6%;
		
	}
}
@media screen and (max-width: 574px){
	.botao_produto{
		margin-left: -3%;
		margin-top: -3%;
		
	}
	.resultado{
		width: 32.5%;
		
	}
}
@media screen and (max-width: 320px){
	.botao_produto{
		margin-left: -25%;
		margin-top: -1%;
		
	}
	.resultado{
		width: 49.3%;
		
	}
}
</style>