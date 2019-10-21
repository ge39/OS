<?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
	$id = $_GET['id'];
?>
<div class="titulo">
	<p>EDITAR  CHAMADOS</p>
</div>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="container">
	
	<form action="../persistence/crud.php" method="get">
		<?php foreach ($var_select as $row) {?>	
			<!-- codigo editar-->
			<input type="hidden" name="code" value="3">
			<div class="id">
				<label>Id</label><br>
				<input class="input" type="text" name="id_chamado" value="<?php echo $row['id'];?>" readonly>
			</div>
			<div class="id">
				<label>Chamado</label><br>
				<input class="input" type="text" name="" readonly value="<?php echo date('d/m/Y', strtotime($row['data_abertura_chamado']));?>" readonly>
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
				<select name="id_tecnico" required="">
					<option value ="<?php echo $row['id_tecnico'];?>"><?php echo $row['nome'];?></option>
                                                                          
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
				<label>Status Chamado <?php echo $row['id_chamado'];?> <?php echo $row['descricao_chamado'];?></label><br>
				<select name="status_chamado" required="">
                                        <option value="<?php echo $row['id_chamado'];?>"><?php echo $row['descricao_chamado'];?></option>
                                        <option value="1">Atendido</option>
                                        <option value="2">Em Atendimento</option>
                                        <option value="3">Pendente</option>
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
				<textarea class ="input" rows="4" cols="5" name="defeito_reclamado"readonly><?php echo $row['reclamado'];?></textarea>
			</div>
			<div class="avaliacao_tecnico">
				<label>Avaliação Técnica</label><br>
				<input class="input" type="text" name="avaliacao" maxlength="150"value="<?php echo$row['avaliacao_tecnico'];?>">
			</div>
			<div class="mensagem">
				<label>Solução Técnica</label><br>
				<textarea class ="input" rows="4" cols="5" maxlength="150" name="solucao"><?php echo$row['solucao'];?></textarea>
			</div>
	<!-- INICIOL-->
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
	<!-- fim INICIOL-->
			<div class="pendencia">
				<label>Qual a Pendência</label><br>
				<input class="input" type="text" name="pendencia" placeholder="Pendenciacao técnica" maxlength="140" value="<?php echo$row['pendencia'];?>">
			</div>
			
			<div class="botao_fechar">
				<input class = "button" type="submit" name=""  value="Editar">	
			</div>
		<?php }?>
	</form>
<!-- INICIO DO MODAL-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>

	<div class="w3-container">
	   <div class="botao_produto"><button onclick="document.getElementById('id01').style.display='block'" class="button">Adicionar </button></div>

	  <div id="id01" class="w3-modal">
	    <div class="w3-modal-content w3-animate-top w3-card-4">
	      
	      <header class="w3-container w3-teal"> 
	      	<!--botao fechar modal-->
	        <span onclick="document.getElementById('id01').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h4>Inserir Itens ao chamado</h4>
	      </header>
	      <div class="w3-container1">
			    <div class ="estoque">
					<!--Inserir ítens no chamado<br>-->
					<div class="produto">
					
							Produto Qtde 
							<form action="../persistence/crud.php" method="">
								<select name="id_produto">
							 		<?php foreach ($var_produto as $etq) { ?>
							 			<option value = "<?php echo $etq['id_produto'];?>">
								 			<?php echo $etq['item'];?>
								 		</option>
								 	<?php }?>
								</select>

							 	<select class = "select" name="qtde">
							 		<option name="1">1</option>
							 		<option name="2">2</option>
							 		<option name="3">3</option>
							 		<option name="4">4</option>
							 		<option name="5">5</option>
							 		<option name="6">6</option>
							 		<option name="7">7</option>
							 		<option name="8">8</option>
							 		<option name="9">9</option>
							 		<option name="10">10</option>
							 	</select>
								<div class="item">
									<input class = "button_inserir" type="submit" value="Adicionar Ítens">
								</div>
							 	<input type="hidden" name="code" value="4">
							 	<input type="hidden" name="id_chamado" value="<?php echo $id ;?>">
								
							</form> 
						
					</div>
				</div>
			</div>
	      <footer class="w3-container w3-teal">
	        <p>Fechamento de Chamados</p>
	      </footer>
	    </div>
	  </div>
	</div>
<!-- FIM DO MODAL-->

<!-- INICIO DO MODAL Remover item-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>

	<div class="w3-container">
	   <div class="botao_r_produto"><button onclick="document.getElementById('id02').style.display='block'" class="button2">Remover </button></div>
	  <div id="id02" class="w3-modal">
	    <div class="w3-modal-content w3-animate-top w3-card-4">
	     
	      <header class="w3-container w3-teal"> 
	      	<!--botao fechar modal-->
	        <span onclick="document.getElementById('id02').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h4>Remover Itens do chamado</h4>
	      </header>

	      <div class="w3-container1">
			    <div class ="estoque">
					<!--remover ítens no chamado<br>-->
					<div class="produto">
						<div class="dados">
							Produto 
						</div>
						<form action="../persistence/crud.php" method="get">
							<select name="id_produto">
						 		<?php foreach ($var_editar  as $prod) { ?>
						 			<option value = "<?php echo $prod['cod_id_produto'];?>">
							 			<?php echo $prod['descricao'];?>
							 		</option>
							 	<?php }?>
							</select>
						 	<input type="hidden" name="code" value="5">
						 	<input type="hidden" name="id_chamado" value="<?php echo $id ;?>">
						 	<input class ="button_remover" type="submit" value="Remover Ítens">
					 	</form>
					</div>
			</div>
	      </div>

	      <footer class="w3-container w3-teal">
	        <p>Fechamento de Chamados</p>
	      </footer>

	    </div>
	  </div>
	</div>
<!-- FIM DO MODAL-->
</div>
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>

<style>
	.produto{
		display: inline-block;
		direction: column;

	}

	.item{
		display: inline-block;
		direction: column;
		background-color: lightgreen;
		width: 10%;
		padding:0 15px;

	}
	
	.button_inserir{
		padding: 10px 20px;
		background: #009933;
		color: #FFF;
		font-family: poppins;
		border-radius: 10px;

	}
	.button_remover{
		padding:10px 15px;
		margin-left: 30px;
		background: #ff3333;
		color: #FFF;
		font-family: poppins;
		border-radius: 10px;
	}
	.produto_util{
		display: inline-block;
		direction: column;
		width: 98.5%;
		background-color: lightgreen;
		margin: -1px 5px;
		padding: 5px;

	}
	.utilizados{
		width: 95%;
	}
	.resultado{
		display: inline-block;
		direction: column;
		background-color: #ccffcc;
		width: 19.6%;
		padding:  1% 2.5%;
		margin: 0.1% 0;
		}
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
	.button2{
		padding:5px 15px;
		background: #ff3333;
		color: #FFF;
	}
	.botao_fechar{
		display: inline-block;
		width: 97%;
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
		width: 99.9%;
		background-color:#A9F5A9;
		padding: 5px;

		}
		
	.w3-container1{
		width: 100%;
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
		font-size: 15px;
	}

@media only screen and (min-width: 1024px) {
	.botao_produto{
		margin-left: -0.5%;
		margin-top: -5%;

	}
	.botao_r_produto{
		margin: 15% 5%;
		
	}
	.container{
	display: inline-block;
	width:80%;
	margin-left: 10%;
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
		width:22.6%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.defeito_reclamado{
		display: inline-block;
		width: 98.5%;
		background-color:#A9F5A9;
		padding: 10px;
		margin: 3px 4px;
		height:0 auto;
	}
	.mensagem{
		display: inline-block;
		width: 98.5%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
	.avaliacao_tecnico
	{
		display: inline-block;
		width:98.5%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:  3px 4px;
		height:0 auto;
	}
	.pendencia{
		display: inline-block;
		width: 98.5%;
		background-color:#A9F5A9; 
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
		
	}
	.estoque{
		/*display: inline-block;
		width: 100%;
		background-color:#A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;*/
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
	.botao_r_produto{
		margin:-16% 36.5%;
		
	}
	.botao_produto{ 
		margin: -16% -1.5%;
		
	}
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding-top: -15px;
	}

}
@media screen and (min-width: 375px){
	.botao_r_produto{
		margin: -14.5% 35%;
	}
	.botao_produto{ 
		margin: -14.5% -1%;
		
	}
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
	}
	
}
@media screen and (min-width: 411px){
	.botao_r_produto{
		margin: -13% 35%;
	}
	.botao_produto{ 
		margin: -13% -1%;
		
	}
	.resultado{
		width: 49%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
	}
	
}
@media screen and (min-width: 568px){
	.botao_r_produto{
		margin: -8.5% 35%;
	}
	.botao_produto{ 
		margin: -8.5% -0.5%;
		
	}
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
	}
	
}
@media screen and (min-width: 731px){
	.botao_r_produto{
		margin: -6.8% 25%;
	}
	.botao_produto{ 
		margin: -6.8% 0.5%;
		
	}
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
	}
	
}
@media screen and (min-width: 768px){
	.botao_r_produto{
		margin: -6.8% 25%;
		font-size: 18px;
	}
	.botao_produto{ 
		margin: -6.8% 0.5%;
		font-size: 18px;
	}
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;

	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
		font-size: 18px;
	}
	.botao_fechar{
		font-size: 18px;

	}
	
}
@media screen and (min-width: 822px){
	.botao_r_produto{
		margin: -6.2% 25%;
	}
	.botao_produto{ 
		margin: -6.2% 0.5%;
		
	}
	.resultado{
		width: 49.6%;
		padding: 20px;
		margin: 3px 0;
	}
	.button_inserir{
		margin: 0 50%;
		padding: -20px 0;
	}
	
}
	
</style>