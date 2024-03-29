<?php
require_once('../template/main_template.php');
require_once('../persistence/controller.php');
?>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
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

                        <?php foreach ($var_select_tec as $row) {?>
                        <div class="id_apelido">Chamado - <?php echo "Nº ".$row['id']?><?php echo " - Técnico ". $row['nome'];?></div>
		
			<div class="id">
				<a href="../public/edit.php?id=<?php echo $row['id'];?>"><?php echo '<div class="label">ID</div>'." ".$row['id'];?></a><br>
			</div>
			
			<div class="loja">
				<a href="../mapas/loja.php?loja=<?php echo $row['loja']?>" target="_blank"><?php echo '<div class="label">Loja</div>'." ".$row['loja'];?>
				</a>
				
			</div>
			<div class="solicitante">
				<?php echo '<div class="label1">Solicitante</div>'." ".strtoupper($row['solicitante']);?><br>
			</div>
						
			<div class="defeito_reclamado" >
				<?php echo '<div class="label1">Defeito Reclamado</div>'." ".strtolower($row['reclamado']);?><br>	
			</div>
			
			<div class="status">
				<?php echo '<div class="label">Status</div>'." ".$row['descr'];?>
			</div>
			
			<div class="abertura">
				<?php echo '<div class="label">Chamado Aberto </div>'." ".date('d/m/Y', strtotime($row['data_abertura_chamado']));?>
			</div>
			
			<div class="abertura">
				<?php echo '<div class="label">Ultima Atualizado </div>'." ".date('d/m/Y', strtotime($row['ultima_atualizacao']));?>
			</div>
			
			<div class="prioridade <?php echo $row['prioridade'];?>">
				<?php echo '<div class="label">Prioridade</div>'." ".strtolower($row['prioridade'])."<br>";
						echo "<style>";
						echo   ".prioridade.alta ";
						echo   ".prioridade.normal";
						echo   ".prioridade.media";
						echo "</style>";
				?>
			</div>
			<div class= "atribuido">
				<?php echo '<div class="label">Atribuido para</div>'." ". $row['nome']."<br>";?>
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
		<ul class="line">
		     <li  style="list-style-type: none;">
		     	<hr class="line2"style="height:2px;width: 100%; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
		     </li>
		</ul>
		<?php }?>
</div>
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>
<style>
	@media screen and (max-width: 1181px){
		.container{
			background-color: white;
			width: 98%;
			height:0 auto;
			margin: 5px 2px;
			padding: 12px 10px;
			font-size: 14px;
			border:solid 1px lightgray;
			font-family: poppins;
		}
		
		.header{
			display: none;
		}
		.label{
			display: inline-flex;
			flex-direction: inline;
			font-family: poppins;
			font-weight: bold;
			word-spacing: 5px;
		}
		.label1{
			display: block;
			flex-direction: column;
			font-family: poppins;
			font-weight: bold;
		}
		.id_apelido{
			background-color:#A9F5A9;
			font-family: Poppins;
			width: 100%;
			text-align: center;
			margin: 5px 0;
		}
		.apelido{
			background-color:#A9F5A9;
			font-family: Poppins;
			width: 100%;
			text-align: center;
			margin: 5px 0;
		}
		.id{
			display: none;
		}
		.loja{
			width:  100%;
			flex-direction: column;
			display: inline-block;
			/*background-color: lightgreen;*/
			margin:  0 5px; 
			font-size: 22px;
			font-family: poppins;
			padding: 10px 5px;
		}
		.solicitante{
			width:  100%;
			flex-direction: column;
			display: inline-block;
			font-family: poppins;
			padding: 10px 5px;
		}
		.titulo{
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3;*/
			width:  98%; 
			margin: 5px; 
		}
		.status{
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3;*/
			margin: 5px; 
			width: 98%; 	
		}
		.abertura{
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3;*/
			width:  98%; 
			margin: 5px;  	
		}
		.defeito_reclamado{
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3; */
			width: 98%;
			margin: 5px;  	
		}
		.prioridade{
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3;*/
			width: 98%;
			margin: 5px;   	
		}
		.atribuido{
			width: 98%;	
			flex-direction: column;
			display: inline-block;
			/*background-color: #D3D3D3; */
			margin: 5px; 
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
		.edicao{
			flex-direction: column;
			display: inline-block;
			width: 100%;
			margin: 10px;
		}
		.link1{
			flex-direction: column;
			display: inline-block;
			width: 45%;	
			padding: 0 10px;
		}
		.button-link1{
			flex-direction: column;
			display: inline-block;
			width: 100%;
			height: 40px;
			text-align: center;	
			background-color:#3CB371;
			padding: 10px 35%;
			font-weight: bolder;
                        border-radius:10px;
		}
		.link2{
			flex-direction: column;
			display: inline-block;
			width: 45%;
			padding: 0 10px;
			margin-left: 1%;	
		}	
		
		.button-link2{

			width: 100%;	
			height: 40px;
			text-align: center;
			background-color:#FF6347;
			font-size: 15px;
			font-weight: bolder;
                        border-radius:10px;
		}	
		
	}
	@media screen and (min-width: 1181px){
		.label{
			display:none;
		}
		.label1{
			display:none;
		}
		.line{
			display: none;
		}
	.header{
		width: 100%;
		/*margin: 0 5px;*/
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
		/*margin: 0 5px;*/
		padding: 2px 10px;
		font-size: 14px;
	}
	.id_apelido{
			display: none;
		}
		.apelido{
			display: none;
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
		height: 40px;
		padding
		
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
		height: 40px;
		padding
		
	}
	.solicitante{
		display: none;
	}
	.titulo{
		margin-left: -10px;
		margin-bottom: 10px;*/
		flex-direction: column;
		display: inline-flex;
		background-color:  #2E8B57;
		width: 10%;
		padding: 10px;
		height: 40px;
		padding
		
	}
	.status{
		flex-direction: column;
		display: inline-flex;
		background-color:#A9F5A9;
		width: 10%;
		padding:10px;
		height: 40px;
		padding
		
	}
	.abertura{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		width: 6%;
		padding:10px;
		height: 40px;
		padding
		
	}
	.defeito_reclamado{
		flex-direction: column;
		display: inline-flex;
		background-color: #A9F5A9;
		width: 34%;
		padding:10px;
		height: 40px;
		padding
		
	}
	.prioridade{
		text-align: center;
		flex-direction: column;
		display: inline-flex;		
		width: 5%;
		padding:10px;
		height: 40px;
		padding
		
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
		height: 40px;
	}
	.edicao{
		flex-direction: column;
		display: inline-flex;
		background-color:#A9F5A9;
		width: 25%;
		margin-top:4px;
		padding: 3px 1px;
		height: 40px;
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
		width: 20%;
		text-align: left;
		margin: -25px 45%;
		/*padding: -6px 5px;*/
	}
	.rodape{
		flex-direction: column;
		display: inline-block;
		width: 98.5%;
		background-color: #2E8B57;
		margin-left: 10px;
		height: 0 auto;
	}
	
	.link3{
		flex-direction: column;
		display: inline-block;
		margin-left: 79.2%;
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
		background:#3CB371; /*#3CB371;*/
		color: #FFF;
		padding: 8px 23%;
		margin: 10px 20px;
	}
}
</style>