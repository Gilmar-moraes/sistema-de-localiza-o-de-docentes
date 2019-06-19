<?php
session_start();
include("conexao.php");

if(empty($_POST['matricula'])|| empty($_POST['senha'])){
	header('Location: login.php');
	exit();
	
	}


$matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM cadastro_professores WHERE matricula = '{$matricula}' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);


if($row==1){
	$_SESSION['matricula'] = $matricula;
	header('Location: informacoes.php');
	exit();

} else{
	
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();

}

?>

<?php 
	$nome = "SELECT nome FROM cadastro_professores WHERE matricula = '{$matricula}'";
 ?>
