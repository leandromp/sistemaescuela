<div class="container">
	<div class="row">
	<div class="col-md-12"> <h2> Ingresar Nuevo Maestro </h2> </div>
	</div>
	<!-- Funcion para crear un formulario -->
	<?php echo form_open('maestros/alta/1'); ?>
	<div class="row">
		<div class="col-md-6">
				<div class="form_group">
					<label>Numero de identificacion</label>
		    		<input type="text" readonly class="form-control" name="id" placeholder="Ingrese la direccion"
		    		data-validation="required" value="<?php echo $datos[0]['id']?>">
				</div>
				<div class="form_group">
					<label>Nombre</label>
		    		<input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre"
		    			   data-validation="required" 
		    			   value="<?php echo $datos[0]['nombre']?>">
				</div>
				<div class="form_group">
					<label>Apellido</label>
		    		<input type="text" class="form-control" name="apellido" placeholder="Ingrese el Apellido"
		    		data-validation="required" value="<?php echo $datos[0]['apellido']?>">
				</div>
				<div class="form_group">
					<label>Direccion</label>
		    		<input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion"
		    		data-validation="required" value="<?php echo $datos[0]['direccion']?>">
				</div>
		</div> <!-- col md 6 asi ocupe la mitad del espacio definido para la clase container -->
		<div class="col-md-6">
				<br><br><br>
				<div class="form_group">
					<label>Telefono</label>
		    		<input type="text" class="form-control" name="telefono" placeholder="Ingrese numero de telefono"
		    		data-validation="number" value="<?php echo $datos[0]['telefono']?>">
				</div>
				<div class="form_group">
					<label>Correo Electronico</label>
		    		<input type="text" class="form-control" name="correo" placeholder="Ingrese un correo valido algo@ejemplo.com"
		    		data-validation="email" value="<?php echo $datos[0]['correo']?>">
				</div>
				<div class="form_group">
					<label> Fecha de Nacimiento</label>
		    		<input type="text" class="form-control" name="fechanac" placeholder="Ingrese la fecha ej: 01/04/1985"
		    		 data-validation="date" data-validation-format="dd/mm/yyyy" value="<?php echo $datos[0]['fechanac']?>">
				</div>
		</div>
	</div> <!-- cierra la clase row -->
	<br>
	<div class="row">
		<div class="col-md-8"> </div>
		<div class="col-md-4"> 
			<div class="text-right"> 
				<button id="guardar" type="submit"  class="btn btn-primary"> 
					<span class="glyphicon glyphicon-floppy-disk"> </span> Guardar  
				</button>
			</div>
		</div> 
	</div>
	</form>
</div>