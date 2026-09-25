<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro de un nuevo documento de vehículo</h1>
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
                    <div class="card card-primary">
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
                                    <form action="../app/controllers/doc_vehiculos/create.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">modelo de vehículo</label>
                                            <input type="text" name="modelo_vehiculo" class="form-control" placeholder="Escriba aquí el modelo de vehículo..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">marca de vehículo</label>
                                            <input type="text" name="marca_vehiculo" class="form-control" placeholder="Escriba aquí la marca de vehículo..." required>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de registro</label>
                                            <input type="date" name="fecha_registro" class="form-control" placeholder="Escriba aquí la fecha de registro..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Inserte el documento del vehículo</label>
                                            <input type="file" name="doc_vehiculo" class="form-control" placeholder="Escriba aquí el documento..." required>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
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

<?php include ('../layout/part2.php');?>
