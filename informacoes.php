<?php
session_start();
include('verifica_login');
?>

<?php include ('cabecalho.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Seja Bem Vindo</h2> 	
	<h2><p>Prencha essas informações</p></h2>
	<form action="professor-presente.php" method="POST">
		<div class="form-group">			
			<label>Sala:
				<input type="text" name="sala" class="form-control" placeholder="bt01">
			</label>

			<label>Bloco:
				<input type="text" name="bloco" class="form-control" placeholder="A">
			</label>

			<label>Andar:
				<input type="text" name="andar" class="form-control" placeholder="Ex: Segundo Andar">
			</label>

			<label>Descrição:
				<input type="text" name="descricao" class="form-control" placeholder="Ex: Em aula">
			</label>

		</div>
		<button type="submit" class="btn btn-primary" value="efetuar" name="enviar">Enviar</button>
		<button type="reset" class="btn btn-primary" name="limpar" value="Limpar Dados">Limpar</button>
	</form>
</body>
</html>
<?php include ('brt-sair.php');?>
<?php include ('rodape.php');?>