<?php
include ('cabecalho.php');
$dsn = "mysql:dbname=sistemaprofessor;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
?>

<?php
try{

	$pdo = new PDO($dsn,$dbuser,$dbpass);
	$sql = "SELECT * FROM localizacao";
	$sql = $pdo->query($sql);

?>
<?php 
	if($sql->rowCount()>0){?>
		<table class=" table table-striped table-bordered" >
			<tr>
				<td align="center">Professores de Tecnologia</td> 
			</tr>
		</table>
		<?php
		foreach ($sql->fetchAll() as $localizacao) {?>
			<table class=" table table-striped table-bordered">
			<tr>
				<td colspan="4" align="center"> Nome </td>
			</tr>
			<tr>
				<td align="center">Bloco: <?= $localizacao['bloco'];?></td>
				<td align="center">Sala: <?= $localizacao['sala'];?></td>
				<td align="center">Andar: <?= $localizacao['andar'];?></td>
				<td align="center">Descrição: <?= $localizacao['descricao'];?></td>
			</tr>
			</table>
			<?php
			#echo "Sala: ".$localizacao["sala"]." - "."Bloco: ".$localizacao['bloco'].' - '."Andar: ".$localizacao['andar']."<br>"; 	
		}


	} else {
		echo "vazio";
	}

} catch(PDOException $e){
	echo "Falhou".$e->getMessage();

}

 
?>