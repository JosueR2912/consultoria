<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');
include ('../app/controllers/doc_vehiculos/update_documento.php');


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar el documento de vehiculo</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos con cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="../app/controllers/doc_vehiculos/update.php" method="post">
                                        <input type="text" name="id_documento" value="<?php echo $id_documento_get; ?>" hidden>
                                       <div class="form-group">
                                            <label for="">Modelo del vehiculo</label>
                                            <input type="text" name="modelo_vehiculo" value="<?php echo $modelo_vehiculo;?>"  class="form-control" placeholder="Escriba aquí el nombre del documento..." required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="">Marca del vehiculo</label>
                                            <input type="text" name="marca_vehiculo" class="form-control" value="<?php echo $marca_vehiculo;?>" placeholder="Escriba aquí el nº de oficio..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de registro</label>
                                            <input type="date" name="fecha_registro" class="form-control" value="<?php echo $fecha_registro;?>" placeholder="Escriba aquí la fecha de registro..." required>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/part2.php'); ?>
