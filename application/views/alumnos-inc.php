<div class="container">

<div class="row">
	<div class="col-md-4">	</div>
	<div class="col-md-4">	</div>
	<div class="col-md-4"> 
		<div class="input-group">
    <span class="input-group-addon"><div class="glyphicon glyphicon-search"> </div></span>
    <input type="text" class="form-control" placeholder="nombre o apellido">
    </div>
  </div>
</div>

	<?php echo $tabla ?>

	<div class="row">
		<div class="col-md-4"> </div>
		<div class="col-md-4"> </div>
		<div class="col-md-4">
			<div class="text-right"> <a href="<?php echo site_url('alumnos/alta')?>" class="btn btn-default"> Ingresar alumno </a> </div>
		</div>
		

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Esta seguro que desea eliminar al alumno seleccionado? Este cambio sera permamente.   
        	<script type="text/javascript">
                    $("a").click(function() {
                    var oID = $(this).attr('id');
                    $('#id_alumno').html("<a href=\"<?php echo site_url('alumnos/eliminar/"+oID+"')?>\" class=\"btn btn-default\"> Aceptar </a>")
                    });
            </script> 
      </div>
      <div class="modal-footer">
      	<div class="row">
      		<div class="col-md-4"><div class="text-left"><a class="btn btn-default" data-dismiss="modal">Close</a></div></div>
      		<div class="col-md-4"></div>
      		<div class="col-md-4"><div id="id_alumno"> <!-- este div fue creado para poder poner el id del maestro adentro --> </div></div>
      	</div>
        
        
      </div>
    </div>
  </div>
</div>