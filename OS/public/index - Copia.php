<?php
require_once('../template/main_template.php');
require_once('../persistence/controller.php');
?>

<div class="container">
	<div class="header">
		<div class="H0">id</div>
		<div class="H1">Loja</div>
		<div class="H2">Defeito Reclamado</div>
		<div class="H3">Status</div>
		<div class="H4">Abertura</div>
		<div class="H8">Atualizado</div>
		<div class="H5">Prioridade</div>
		<div class="H6">Atribuido</div>
		<div class="H7">Editar Chamados</div>
	</div>

	<?php foreach ($var_select_all as $row) {?>
		<div class="id">
			<a href="../public/edit.php?id=<?php echo $row['id'];?>"><?php echo $row['id'];?></a>
		</div>
		<div class="loja">
			<a href="http://localhost/ramais/?busca=<?php echo $row['loja'];?>"><?php echo $row['loja'];?></a>
		</div>
		<div class="defeito_reclamado" >
			<?php echo strtolower($row['reclamado']);?>	
		</div>
		<div class="status">
			<?php echo $row['descr'];	?>
		</div>
		<div class="abertura">
			<?php echo date('d/m/Y', strtotime($row['data_abertura_chamado']));?>
		</div>
		<div class="abertura">
			<?php echo date('d/m/Y', strtotime($row['ultima_atualizacao']));?>
		</div>
		<div class="prioridade <?php echo $row['prioridade'];?>">
			<?php echo strtolower($row['prioridade'])."<br>";
					echo "<style>";
					echo   ".prioridade.alta ";
					echo   ".prioridade.normal";
					echo   ".prioridade.media";
					echo "</style>";
				?>
		</div>
		<div class= "atribuido">
			<?php echo $row['nome']."<br>";?>
		</div>
		<div class= "edicao">
			<div class="link1">
				<form action="../public/edit.php" method="GET">
					<input type="hidden" name="id" value= '<?php echo $row['id'];?>'>
					<input type="submit" class="button-link1" value="Editar" >
				</form>
			</div>
			<div class="link2">
				<form action="../public/delete.php" method="GET">
					<input type="hidden" name="id" value= '<?php echo $row['id'];?>'>
					<input type="submit" class="button-link2" value="Encerrar" >
				</form>
			</div>

		</div>
	<?php }?>

</div>
<div class ="rodape">
	<div class="link3">
		<form action="../public/abertura.php" method="GET">
			<input type="hidden" name="id" value= '1'>
			<input type="submit" class="button-link3" value="NOVO">
		</form>
	</div>
	<div class="link4">
		<form action="../public/encerrado.php" method="GET">
		<input type="submit" class="button-link4" value="ENCERRADO">
		</form>
	</div>
</div>

<style>
	.header{
		width: 98.2%;
		/*margin-left: -15px;*/
		padding: 10px;
		background-color:  #2E8B57;
		font-family: verdana;
		color: white;
		font-size: 14px;
	}
	.H0{
		flex-direction: column;
		display: inline-flex;
		width: 3.5%;
	}
	.H1{
		flex-direction: column;
		display: inline-flex;
		width: 4.5%;
	}
	.H2{
		flex-direction: column;
		display: inline-flex;
		width: 33.6%;
	}
	.H3{
		flex-direction: column;
		display: inline-flex;
		width: 11.5%;
	}
	.H4{
		flex-direction: column;
		display: inline-flex;
		width: 7.6%;
	}
	.H5{
		flex-direction: column;
		display: inline-flex;
		width: 8%;
	}
	.H6{
		flex-direction: column;
		display: inline-flex;
		width: 8%;
	}
	.H7{
		flex-direction: column;
		display: inline-flex;
		width: 12.4%;
	}
	.H8{
		flex-direction: column;
		display: inline-flex;
		width: 6.6%;
	}
	.container{
		background-color: white;
		width: 100%;
		height:0 auto;
		margin-left: -10px;
		padding: 2px 10px;
		font-size: 14px;
	}
	.id{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		text-align: center;
		font-family: verdana;
		font-color:#0B3B0B;
		width: 3%;
		/*margin: 1px -1px;*/
		padding:8px 10px;
		height:0 auto;
	}
	.loja{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		text-align: center;
		font-family: verdana;
		font-color:#0B3B0B;
		font-weight: bold;
		width: 3%;
		/*margin: 1px -1px;*/
		padding:8px 10px;
		height:0 auto;
	}
	.titulo{
		margin-left: -10px;
		margin-bottom: 10px;*/
		flex-direction: column;
		display: inline-flex;
		background-color:  #2E8B57;
		width: 10%;
		padding: 10px;
		height:0 auto;
	}
	.status{
		flex-direction: column;
		display: inline-flex;
		background-color:#A9F5A9;
		width: 10%;
		padding:10px;
		height:0 auto;
	}
	.abertura{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		width: 6%;
		padding:10px;
		height:0 auto;
	}
	.defeito_reclamado{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		width: 34%;
		padding:10px;
		height:0 auto;
	}
	.prioridade{
		text-align: center;
		flex-direction: column;
		display: inline-flex;		
		width: 5%;
		padding:10px;
		height:0 auto;
	}
	.prioridade.alta{
		background-color: #FF6347;
	}
	.prioridade.normal{
		background-color: #04B431;
	}
	.prioridade.media{
		background-color: #DAA520;
	}
	.atribuido{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		width: 5.6%;
		padding:10px;
		height:0 auto;
	}
	.edicao{
		flex-direction: column;
		display: inline-flex;
		background-color:#A9F5A9;
		width: 13%;
		margin-top:4px;
		padding: 3px 1px;
		height: 5%;
		text-align: left;
	}
	.button-link1{
		padding:5px 15px;
		background: #006400;
		color: #FFF;
	}	
	.link1{
		/*background-color:lightblue;*/
		width: 20%;
		text-align: center;
		padding: -6px 5px;
		margin-left: 5px;
	}
	.button-link2{
		padding:5px 15px;
		background:	#FF6347;
		color: #FFF;

	}	
	.link2{
		/*background-color:lightblue;*/
		width: 20%;
		text-align: left;
		margin: -45px 45%;
		/*padding: -6px 5px;*/
	}
	.rodape{
		flex-direction: column;
		display: inline-block;
		width: 99.5%;
		background-color: #2E8B57;
		height: 0 auto;
	}
	
	.link3{
		flex-direction: column;
		display: inline-block;
		margin-left: 79.7%;
		background-color: #2E8B57;
		width: 10%;
		height: 50px;
		
	}
	.link4{
		flex-direction: column;
		display: inline-block;
		background-color: #2E8B57;
		width: 10%;
		height: 50px;
		margin-left: 0;
	}
	.button-link4 {
		background:  #FF0000;
		color: #FFF;
		padding: 8px 10%;
		margin: 10px 5%;


	}
	.button-link3 {
		background:#3CB371;
		color: #FFF;
		padding: 8px 23%;
		margin: 10px 20px;
	}

	
</style>