<!DOCTYPE html>
<html>
<head>
	<title>Bem Vindo</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
	<div class="container">
	
		
		<div class="conteudo">
				<h2>Seja Bem Vindo</h2>
			<a href="./public/index.php">Acessar o Sistema</a>
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
		direction: inline-block;
		direction: column;
		width: 49%;
		border: solid lightblue 1px;
		text-align: center;
		padding-top: 5%;
		margin: 10% 20%;
		color:lightblue;
		font-family: poppins;
	}
	.conteudo{
		direction: inline-block;
		direction: column;
		width: 50%;
		margin: 2% 15%;
	
		height: 20%;
		padding:5% 10%
	}
	.button{
		font-family: poppins;
		padding: 1% 15%;

	}
	@media screen and (min-width: 360px){
		.container{
			padding: 5%;
			width: 90%;
			margin: 10% -7%;
			color:lightblue;
			font-size: 60px;
			border: none;
			
		}
		.conteudo{
			font-size: 60px;
			padding: 15%
			
	}
		.button{
		font-family: poppins;
		padding: 15% 0;
		font-size: 24px;

	}
	@media screen and (min-width: 1024px){
		.container{
			padding-top: 5%;
			margin: 10% 0;
			color:lightblue;
			font-size: 20px;
			
		}
		.button{
		font-family: poppins;
		padding: 1% 15%;
		font-size: 20px;

	}
	@media screen and (min-width: 1360px){
		.container{
			padding-top: 5%;
			margin: 10% 0;
			color:lightblue;
			font-size: 20px;
			
		}
		.conteudo{
			font-size: 50px;
			padding: 15%;
		}
		.button{
		font-family: poppins;
		padding: 1% 15%;
		font-size: 20px;

	}
}
</style>
</html>