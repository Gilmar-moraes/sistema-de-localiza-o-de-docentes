
<?php
session_start();
?>

<?php include ('cabecalho.php');?>
	
	<form action="login1.php" method="POST">
		<div class="form-group">
	        <label for="matricula">Matricula:</label>
	        <input type="text" name="matricula" class="form-control" placeholder="Enter matricula"/>
	    </div>
	    <div class="form-group">
	        <label for="senha">Senha:</label>
	        <input type="password" name="senha" class="form-control" placeholder="Password"/>
	    </div>
	    
    	<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>

        	<button type="submit" class="btn btn-primary">Entra</button>
	</form>

<?php include ('rodape.php');?>