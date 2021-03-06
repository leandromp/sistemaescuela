<div class="container">
	<?php echo form_open('alumnos/alta',$form_config); ?>
		<div class="row">
			<div class="col-md-6">
					<div class="form_group">
						<label>DNI</label>
			    		<input type="text" class="form-control" name="dni" placeholder="Ej:12354678 sin puntos "
			    			   data-validation="number"
			    			   data-validation-allowing="range[10000000;40000000]">
					</div>					
					<div class="form_group">
						<label>Nombre</label>
			    		<input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre"
			    			   data-validation="required">
					</div>
					<div class="form_group">
						<label>Apellido</label>
			    		<input type="text" class="form-control" name="apellido" placeholder="Ingrese el Apellido"
			    		data-validation="required">
					</div>
					<div class="form_group">
						<label>Direccion</label>
			    		<input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion"
			    		data-validation="required">
					</div>
			</div> <!-- col md 6 asi ocupe la mitad del espacio definido para la clase container -->
			<div class="col-md-6">
					<div class="form_group">
						<label>Telefono</label>
			    		<input type="text" class="form-control" name="telefono" placeholder="Ingrese numero de telefono"
			    		data-validation="number">
					</div>
					<div class="form_group">
						<label>Correo Electronico</label>
			    		<input type="text" class="form-control" name="correo" placeholder="Ingrese un correo valido algo@ejemplo.com"
			    		data-validation="email">
					</div>
					<div class="form_group">
						<label> Fecha de Nacimiento</label>
			    		<input type="text" class="form-control" name="fechanac" placeholder="Ingrese la fecha ej: 01/04/1985"
			    		 data-validation="date" data-validation-format="dd/mm/yyyy">
					</div>
			</div>
		</div> <!-- cierra la clase row -->
		<div class="row">
			<div class="col-md-12">
				<div class="text-right">
					<button id="btn-aceptar" class="btn btn-default" type="submit"> <span class=""> </span> Guardar Alumno</button>
				</div>
			</div>
		</div>
	</form>
</div> <!-- cierra el div de la clase container -->
<script type="text/javascript">
$(document).ready(function(){
	$.validate({
		form: '#form_alumno',
		modules: 'security',
		onSucces: function()
		{
			//Aca puede ir algo cuando sea valida y se envie el formulario.
		},
		onError: function()
		{
			alert('Advertencia sobre los campos sin llenar.');
			return false;
		} 
	});
	

})	
	
</script>