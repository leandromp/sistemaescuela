<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Escuela</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/sistemaescuela.css">
        <script src="<?php echo base_url();?>/assets/jquery.min.js"></script>
        <link rel="author" href="humans.txt">
    </head>
    <body>
    <div id="container-fluid"> 
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-4"> <h2 style="color:#fff"> Sistema Escuela - Chamorro </h2> </div>
        <div class="col-md-4"> <?php if(isset($usuario[0]['nombre'])) {?> 
                                  <button type="button" class="btn btn-primary btn-sm">
                                  <span class="glyphicon glyphicon-user"></span> 
                                  <?php echo $usuario[0]['nombre'] ?> </button>
                                  <button type="button" class="btn btn-primary btn-sm">
                                  <span class="glyphicon glyphicon-off"></span> 
                                  Salir </button>

                               <?php } ?> 
        </div>
    </div>
    </div> <!--termina el conteiner fluid de la cabecera.-->
    <?php //if(isset($usuario[0]['nombre'])) {?> 
    <div class="container">
    <div class="btn-group">
        <a href="#" class="btn btn-default">Maestros</a>
        <a href="#" class="btn btn-default">Alumnos</a>
        <a href="#" class="btn btn-default">Materias</a>
        <a href="#" class="btn btn-default">Grados</a>
        <a href="#" class="btn btn-default">Notas - Examenes</a>
        <a href="#" class="btn btn-default">Matriculas</a>
    </div>
    </div>
    <?php // }?>
