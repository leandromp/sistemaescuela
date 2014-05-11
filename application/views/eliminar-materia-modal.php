<div class="modal fade bs-example-modal-sm" id="eliminarMateria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Materias</h4>
      </div>
      <div class="modal-body"> Esta seguro que dese eliminar la materia: <div class="nombre_materia"> </div>  </div>
      <div class="modal-footer">
        <button type="button" id="cerrar" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="aceptar" class="btn btn-primary" > Aceptar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  

  $("a").click(function() {
        var nombre = $(this).attr('id');
        //alert(nombre);
        $('.nombre_materia').text(nombre);
  });

  
    //capturo el valor de los elementos HTML con el id
    //var nombre=$(".#nombre_materia").val();
    
    $("#aceptar").click(function(){
      var nombre=$(".nombre_materia").text();
      $.ajax({
        url:'materias/eliminar_materia',
        type:'POST',
        dataType:'json',
        data:{'nombre_materia':nombre},
        success: function (result){
            switch (result)
            {
              case 0:
              alert('Ya existe otra materia con el mismo nombre, no puede haber mas de 1');
              break
              case 1:
              alert('Se elimino correctamente la materia');
              location.reload();
              break  
              case 2:
              alert('Ingrese el nombre de la Materia, Por favor');
              break  
            }
            
           
            //$("#cerrar").click();
          },//cierra el succes  
        error: function (){
            alert('Ocurrio un error comuniquese con el Administrador. X(');
          }//cierra el error
        });
    });

});
</script>

