<?php
require_once('../template/main_template.php');
require_once('../persistence/controller.php');

?>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <link rel="stylesheet" type="text/css" href="../css/index.css">
 
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
		<div class="id_apelido">Chamado Aberto - <?php echo "N° " .$row['id'];?></div>
				
		<div style="border:solid 1px lightgray;">
		
			<div class="id">
				<a href="../public/edit.php?id=<?php echo $row['id'];?>"><?php echo '<div class="label">ID</div>'." ".$row['id'];?></a><br>
			</div>
			
			<div class="loja">
				<a href="../mapas/loja.php?loja=<?php echo $row['loja']?>" target="_blank"><?php echo '<div class="label">Loja:  </div>'." ".$row['loja'];?>
				</a>
				
			</div>
			<div class="solicitante">
				<?php echo '<div class="label1">Solicitante:</div>'.strtoupper($row['solicitante']);?><br>
			</div>
						
			<div class="defeito_reclamado" >
				<?php echo '<div class="label1">Solicitação do Cliente:</div>'." ".strtolower($row['reclamado']);?><br>	
			</div>
			
			<div class="status">
				<?php echo '<div class="label">Status: </div>'." ".$row['descr'];?>
			</div>
			
			<div class="abertura">
				<?php echo '<div class="label">Chamado Aberto: </div>'." ".date('d/m/Y', strtotime($row['data_abertura_chamado']));?>
			</div>
			
			<div class="abertura">
				<?php echo '<div class="label">Ultima Atualizado: </div>'." ".date('d/m/Y', strtotime($row['ultima_atualizacao']));?>
			</div>
			
			<div class="prioridade <?php echo $row['prioridade'];?>">
				<?php echo '<div class="label">Prioridade: </div>'." ".strtolower($row['prioridade'])."<br>";
						echo "<style>";
						echo   ".prioridade.alta ";
						echo   ".prioridade.normal";
						echo   ".prioridade.media";
						echo "</style>";
				?>
			</div>
			
			<div class= "atribuido">
				<a href="../public/meus_chamados.php?id_tec=<?php echo $row['id_tecnico']?>">
					<?php echo '<div class="label">Atribuido para: </div>'." ". $row['nome']."<br>";?>
				</a>
			</div>
			<div class= "edicao">
				<div class="link1">
					<form action="../public/edit.php" method="GET">
						<input type="hidden" name="id" value= '<?php echo $row['id'];?>'>
						<input type="submit" class="button-link1" value="Editar" >
					</form>
				</div>
				<div class="link2">
					<form action="../public/enc_cham.php" method="GET">
						<input type="hidden" name="id" value= '<?php echo $row['id'];?>'>
						<input type="submit" class="button-link2" value="Encerrar" >
					</form>
				</div>
			</div>
			<!--<ul class="line">
		     <li  style="list-style-type: none;">
		     	<hr class="line2"style="height:2px;width: 100%; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
		     </li>
			</ul>-->
	</div>
<?php }?>
</div>

<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>
