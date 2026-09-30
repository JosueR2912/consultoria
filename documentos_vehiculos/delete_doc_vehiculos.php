<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/doc_vehiculos/show_doc_vehiculos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Eliminar documento de vehículo</h1>
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
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Esta seguro de eliminar el documento?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/doc_vehiculos/delete_doc_vehiculo.php" method="post">
                                        <input type="text" name="id_vehiculo" value="<?php echo $id_vehiculo_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Modelo de vehículo</label>
                                            <input type="text" name="modelo_vehiculo" class="form-control" value="<?php echo $modelo_vehiculo;?>" disabled>
                                        </div>
                                        <div class="form-group"></div>
                                            <label for="">Marca de vehículo</label>
                                            <input type="text" name="marca_vehiculo" class="form-control" value="<?php echo $marca_vehiculo ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de registro</label>
                                            <input type="text" name="fecha_registro" class="form-control" value="<?php echo $fecha_registro;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Documento del vehiculo</label>
                                            <input type="text" name="doc_vehiculo" class="form-control" value="<?php echo $doc_vehiculo;?>" disabled>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                            <button class="btn btn-danger">Eliminar</button>
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
