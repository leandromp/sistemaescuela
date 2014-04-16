<div class="container">
	<div class="row">
			<div class="col-md-4"> </div>
	        <div class="col-md-4"> 
	        	<h2> Login de Usuario </h2> 
	        </div>
	        <div class="col-md-4"> </div>
	        
	</div>
	<div class="row">
			<div class="col-md-3"> </div>
	        <div class="col-md-9"> 
	        <blockquote>
	        		<p> Ingrese sus datos para poder acceder al sistema</p>
	        	</blockquote>
	        </div>
	</div>
	<?php echo form_open('login/acceder'); ?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
			    <label for="exampleInputEmail1">Usuario</label>
			    <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
			  	</div>
			  	<div class="form-group">
			    <label for="exampleInputEmail1">Contraseña</label>
			    <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
			  	</div>
			  	<button type="submit" class="btn btn-default">Ingresar</button>
			</div>
			<div class="col-md-4"></div>
		</div>
	</form>
</div>