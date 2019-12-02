<!DOCTYPE html>
<html>
<head>
	<title>Bem Vindo</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="conteudo">
				<p class="titulo">Seja Bem Vindo</p>
			<a class="linque" href="./public/index.php">Acessar o Sistema de Chamados</a>
		</div>
	</div>
</body>
<style>
	
	a:link, a:visited {
	  background-color: lightblue;
	  color: white;
	  padding: 14px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	}

	a:hover, a:active {
	  background-color: lightgreen;

	}
	.container{
		width: 90%;
		height: 100%;
		border: solid lightblue 1px;
		padding-top: 0%;
		margin: 10% 5%;
		color:lightblue;
		font-family: poppins;
	}
	.conteudo{
		width: 50%;
		text-align: center;
		height: 20%;
		padding:5% 23%

	}
	.titulo{
		font-size:50px;
		color: gray;
	}
	.linque{
		font-family: poppins;
		padding: 1% 15%;
		font-size:450%;
                width: 90%;
	}

	@media screen and (min-width:1024px ){
	.container{
		border: none;
		width: 40%;
		height: 100%;
		margin-left: 30%;
		width: 40%;
	}
	.titulo{
		font-size:30px;
		color: black;
	}
	.linque{
		font-family: poppins;
		padding: 1% 15%;
		font-size:120%;
	}
}
</style>
</html>