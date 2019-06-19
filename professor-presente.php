<?php 
 include ('cabecalho.php');
 include ('conexao.php');
 include ('banco-localizacao.php');
?>

<?php
	$sala = $_POST['sala'];
	$bloco = $_POST['bloco'];
	$andar = $_POST['andar'];
	$descricao = $_POST['descricao'];

	if (insereLocalizacao($conexao, $sala, $bloco, $andar, $descricao)) {?>
		<p class="text-success">A Localização sala <?= $sala ?>, bloco <?= $bloco ?> e andar <?= $andar ?> e Descrição<?= $descricao?></p>
		<a href="produtos-lista.php"><button type="submit" class="btn btn-primary" value="professores-lista" name="enviar">Professores Presentes</button></a>
	<?php } else {
		$msg = mysqli_error($conexao)
	?>
		<p class="text-danger">Problema de conexão</p>
		<a href="informacoes.php"><button type="submit" class="btn btn-primary" value="informacoes" name="informacoes">Tente Novamente</button></a>
	<?php
	}
?>
<?php include ('brt-sair.php');?>
<?php include ('rodape.php');?>