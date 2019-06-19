<?php include ('cabecalho.php');?>
	
	<form action="/pagina-processa-dados-do-form" method="post">
		<div class="form-group">
	        <label for="name">Nome::</label>
	        <input type="int" id="matricula" class="form-control" placeholder="Enter matricula"/>
	    </div>
		<div class="form-group">
	        <label for="matricula">Matricula:</label>
	        <input type="int" id="matricula" class="form-control" placeholder="Enter matricula"/>
	    </div>
	    <div class="form-group">
	        <label for="senha">Senha:</label>
	        <input type="password" id="senha" class="form-control" placeholder="Password"/>
	    </div>
	    
    	<div class="form-group">
	        <label for="matricula">Centro:</label>
	        <select class="form-control form-control-lg">
  				<option>CCET</option>
  				<option>CCBS</option>
  				<option>CCHS/option>
  				<option>ICJ/option>
			</select>
	    </div>

        	<button type="submit" class="btn btn-primary">Cadastro</button>
	</form>

<?php include ('rodape.php');?>