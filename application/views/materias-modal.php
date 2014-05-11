<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Agregar Materias</h4>
      </div>
      <div class="modal-body">
          <div class="col-md-6">
          <div class="input-group">
          <span class="input-group-addon">M</span>
          <input type="text" class="form-control" id="nombre_materia" placeholder="Nombre de la Materia">
          </div>
        </div>
        <div class="col-md-6"> <a class="btn btn-primary" id="agregar_materia"> Agregar Materia </a> </div><br>
      </div>
      <div class="modal-footer">
        <button type="button" id="cerrar" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    //capturo el valor de los elementos HTML con el id
    var nombre_materia=$("#nombre_materia").val();
    $("#agregar_materia").click(function(){
      $.ajax({
        url:'materias/guardar_materia',
        type:'POST',
        dataType:'json',
        data:{'nombre_materia':nombre_materia},
        success: function (result){
            switch (result)
            {
              case '0':
              alert('Ya existe otra materia con el mismo nombre, no puede haber mas de 1');
              break
              case '1':
              alert('Se agrego correctamente la materia');
              break  
              case '2':
              alert('Ingrese el nombre de la Materia, Por favor');
              break  
            }
            
           location.reload();
            //$("#cerrar").click();
          },//cierra el succes  
        error: function (){
            alert('Ocurrio un error comuniquese con el Administrador. X(');
          }//cierra el error
        });
    });

  });
</script>


