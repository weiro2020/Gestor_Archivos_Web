<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-success" id="panel-margin"> 
		<div class="panel-heading">
			<h1 class="panel-title">Ingreso de usuario</h1>
		</div>
		<div class="panel-body">
			<form method="POST">
				<div class="form-group">
					<label for="username">Usuario</label>
					<input class="form-control" name="stud_no" placeholder="Usuario" type="text" required="required" >
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" placeholder="Contraseña" type="password" required="required" >
				</div>
				<?php include 'login_query.php'?>
				<div class="form-group">
					<button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> Ingresar</button>
				</div>
			</form>
		</div>
	</div>
</div>