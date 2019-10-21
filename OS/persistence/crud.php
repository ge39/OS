<?php
	require_once("../conexao/conexao.php");
 	echo $codigo = $_GET['code'];
 	if(($_GET['code']=='2')){ //fechamento de chamado 2
		
		try{
			$chamado = $_GET['id_chamado'];
			$status = $_GET['id_chamado'];
			$id_tecnico = $_GET['id_tecnico'];
			$data_fechamento = date('Y-m-d H:i', strtotime( $_GET['atualizacao']));
			date_default_timezone_set('America/Sao_Paulo');
			$data_fechamento = date('d-m-Y H:i');
			$avaliacao = $_GET['avaliacao'];
			$solucao = $_GET['solucao'];
			$pendencia =  $_GET['pendencia'];

			  $stmt = $pdo->prepare("UPDATE ordem SET id_status_chamado = :id_status,id_tecnico = :id_tecnico,data_fecha_chamado = :data_fechamento,avaliacao_tecnico = :avaliacao,solucao = :solucao, pendencia= :pendencia  WHERE id = :id_chamado");
			  $stmt->execute(array(
			  	':id_status'    =>$status,
			    ':id_tecnico'	=>$id_tecnico,
			    ':data_fechamento'	=>$data_fechamento,
			    ':avaliacao'	=>$avaliacao,
			    ':solucao'		=>$solucao,
			    ':pendencia'	=>$pendencia,
			    ':id_chamado'	=>$chamado
			    ));
			//header('Location: ../public/index.php?');
		    echo $status;

		} catch(PDOException $e) {
			  echo $stmt->rowCount(); 
	  	echo 'Error: ' . $e->getMessage();
		}

		}elseif($_GET['code']=='3'){ //atualização de chamado ou reabrir chamados 3
		$id = $_GET['id_chamado'];
		try{
		if(empty($_GET['id_estoque'])){
			$id_estq = 0 ;
			$string = $id_estq;
		}else
		{
		$string= $_GET['id_estoque'];
		}
		 $id_chamado = $_GET['id_chamado'];
		 $status_chamado = $_GET['id_chamado'];
		 $id_tecnico = $_GET['id_tecnico'];
		// echo $data_fechamento = date('Y/m/d', strtotime( $_GET['data_fechamento']));
		 $atualizacao = date('Y-m-d', strtotime( $_GET['atualizacao']));
		 $avaliacao_tecnico = $_GET['avaliacao'];
		 $solucao = $_GET['solucao'];
		 $status = $_GET['id_chamado'];
		 $pendencia = $_GET['pendencia'];

		  $stmt = $pdo->prepare("UPDATE ordem SET id_status_chamado = :id_status,id_tecnico = :id_tecnico,ultima_atualizacao = :data_atualizacao,avaliacao_tecnico = :avaliacao,id_estoque = :saida_estoque, solucao = :solucao, status = :status, pendencia = :pendencia  WHERE id = :id_chamado");

		  	  $stmt->execute(array(
			  	':id_chamado'	=>$id_chamado,
			    ':id_status'    =>$status_chamado,
			    ':id_tecnico'	=>$id_tecnico,
			    ':data_atualizacao'	=>$atualizacao,
			    ':avaliacao'	=>$avaliacao_tecnico,
			    ':saida_estoque'=>$string,
			    ':solucao'		=>$solucao,
			    ':status'		=>$status,
			    ':pendencia'	=>$pendencia
			    ));
		//header('Location: ../public/index.php?');
		 } catch(PDOException $e) {
			  echo $stmt->rowCount(); 
	  		  echo 'Error: ' . $e->getMessage();
		}
	}elseif($_GET['code']==4){//insere na tabela utilizados os itens inseridos no chamado 4
		
		$qtde = $_GET['qtde'];
		$id = $_GET['id_produto'];
		$id_chamado = $_GET['id_chamado'];

		$stmt=$pdo->prepare("insert into utilizado (qtde,cod_id_produto,id_chamado) values (:qtde, :produto,:chamado)");
		$stmt->bindvalue(':qtde', $qtde);
		$stmt->bindvalue(':produto',$id);
		$stmt->bindvalue(':chamado',$id_chamado);
		$stmt->execute();
		header("Location: ../public/edit.php?id=$id_chamado");
                
                
	}elseif($_GET['code']==5){ //remover itens do chamado 5
		$id = $_GET['id_produto'];
		$id_prod = $_GET['id_produto'];
		$id_chamado = $_GET['id_chamado'];

		$edit = $pdo->prepare("delete from utilizado where cod_id_produto = :codpro and id_chamado = :id");
		$edit->bindvalue(':codpro', $id_prod);
		$edit->bindvalue(':id',$id_chamado);
		$edit->execute();
		header("Location: ../public/edit.php?id=$id_chamado");

	}else
	{
	//cria um chamado novo
		 $id_loja = $_GET['id'];
		 $id_tecnico = $_GET['id_tecnico'];
		 $solicitante = $_GET['solicitante'];
		 $id_priore = $_GET['id_priore'];
		 $date = date('Y-m-d', strtotime($_GET['data']));
		 $falha= $_GET['defeito_reclamado'];
		 $status_chamado = $_GET['status_chamado'];
		 $status = $_GET['status'];
		 	
		$data = [
			'loja'=>$id_loja,
			'tecnico'=>$id_tecnico,
			'solicitante'=>$solicitante,
			'id_priore'=>$id_priore,
			'data'=>$date,
			'falha'=>$falha,
			'status_chamado'=>$status_chamado,
			'status'=>$status
		];
		$sql = "INSERT INTO ordem (id_loja,id_tecnico,solicitante,id_prioridade,data_abertura_chamado,reclamado,id_status_chamado,status)
			values(:loja,:tecnico,:solicitante,:id_priore,:data,:falha,:status_chamado,:status)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam( ':loja',$id_loja);
			$stmt->bindParam( ':tecnico',$id_tecnico);
			$stmt->bindParam( ':solicitante',$solicitante);
			$stmt->bindParam( ':id_priore',$id_priore);
			$stmt->bindParam( ':data',$date);
			$stmt->bindParam(':falha',$falha);
			$stmt->bindParam( ':status_chamado',$status_chamado);
			$stmt->bindParam( ':status',$status);
			$result = $stmt->Execute();

			header('Location: ../public/index.php?');

			if ( ! $result )
			{
			    var_dump( $stmt->errorInfo() );
			    exit;
					//echo $stmt->rowCount() . "linhas inseridas";
				
				exit;
			}


	}