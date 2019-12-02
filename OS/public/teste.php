 <?php
	require_once('../persistence/controller.php');
	require_once('../template/main_template.php');
	//$id = $_GET['id'];
?>
 <div class="w3-container">
    <div class ="estoque">
		<!--Inserir ítens no chamado<br>-->
		<div class="produto">
			<div class="dados">
				Produto Qtde 
			</div>
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
			 	<input type="hidden" name="code" value="4">
			 	<input type="hidden" name="id_chamado" value="<?php echo $id ;?>">
			 	<input class = "button_inserir" type="submit" value="Adicionar Ítens">
		 	</form>
		</div>
	</div>
</div>
<style>
	
.produto_util{
		display: inline-block;
		direction: column;
		width: 98.5%;
		background-color: lightgreen;
		margin: -1px 5px;
		padding: 5px;
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
	.estoque{
		display: inline-block;
		width: 99%;
		background-color:#A9F5A9;
		padding: 10px;
		margin:3px 4px;
		height:0 auto;
	}
		
}