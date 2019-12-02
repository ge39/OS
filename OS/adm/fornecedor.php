<?php
	require_once('../persistence/controller.php');
	require_once('../template/adm_template.php');
	$cadastro = $_GET['cad'] 
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>

<div class="titulo"><p>Cadastro de <?php echo $cadastro?></p></div>

<div class="container">
	<form action="../persistence/crud.php" method="GET">
		
		<div class="nome">
			<label>Nome</label><br>
			<input type="text" name="endereco" placeholder="nome">
		</div>
		
		<div class="endereco" >
			<label>Endereço</label><br>
			<input type="text" name="endereco" placeholder="endereço">
		</div>
		
		<div class="telefone">
			<label>Telefone</label><br>
			<input class="input" type="text" name="telefone" placeholder="telefone" >
		</div>
		
		<div class="celular">
			<label>Celular</label><br>
			<input class="input" type="text" name="celular" placeholder="celular" >
		</div>
		
		<div class="data">
			<!--<label>Data Cadastro</label><br>-->
			<input class="datachamado" type="hidden" readonly name="data" value="<?php 
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');
			echo $date;?>">
		</div>
		
		<div class="rg">
			<label>RG</label><br>
			<input class="input" type="text" name="RG" placeholder="RG" >
			
		</div>
		
		<div class="cpf">
			<label>CPF</label><br>
			<input class="input" type="text" name="telefone" placeholder="CPF" >
		</div>

		<div class="Email">
			<label>Email</label><br>
			<input class="input" type="email" name="email" placeholder="email" >
		</div>
		
		<div class="botao_salvar">
			<input class="button" type="submit" name="" value="Salvar">
		</div>
		
	</form>
</div>
<style>
	input[type=text] {
		width: 100%;
		font-size: 18px;
		font-family: poppins;	
	}
	.titulo{
		width: 100%;
		text-align: center;
		font-size: 24px;
		color:lightblue;
		padding: 12px;
	}
	.container{
		display: inline-block;
		direction: column;
		width: 99.4%;
		background-color:lightblue;
		padding: 10px;
		margin:  5px;
		font-size: 18px;
		font-family: poppins;	
	}
	.botao_salvar{
		padding: 10px 0;
	}
	.button{
		width: 180px;
		font-family: poppins;
		font-size: 18px;
	}

	
</style>