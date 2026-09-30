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
                    <h1 class="m-0">Datos del vehiculo</h1>
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


        <div class="form-group">
            <label for="">Marca del vehiculo</label>
            <input type="text" name="marca_vehiculo" class="form-control" value="<?php echo $marca_vehiculo;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Modelo del vehiculo</label>
            <input type="text" name="modelo_vehiculo" class="form-control" value="<?php echo $modelo_vehiculo;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Fecha de registro</label>
            <input type="text" name="fecha_registro" class="form-control" value="<?php echo $fecha_registro;?>" disabled>
        </div>


        <div class="form-group">
            <label for="">Documento del vehiculo</label>
            <div class="input-group">
                <input type="text" name="doc_vehiculo" class="form-control" value="<?php echo $doc_vehiculo;?>" disabled>
                <?php if(!empty($doc_vehiculo)): ?>
                    <div class="input-group-append">
                        <a href="../docvehiculos/<?php echo $doc_vehiculo; ?>" target="_blank" class="btn btn-info">
                            <i class="fa fa-file"></i> Ver Documento
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <a href="index.php" class="btn btn-secondary">Volver</a>
        </div>

    </div>
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
