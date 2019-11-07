<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<div class="row">
		<div class="col-md-8">
		<h1>Bienvenido a UMG Asistencia</h1>
		
    	<div class="col-md-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesion</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			    </div>
			</div>

			    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Registro</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?action=processregister">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Nombre" required name="name" type="text">
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Apellidos" required name="lastname" type="text">
			    		</div>

			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Registrarme">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
<br><br><br>