<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/convenios/show_convenio.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Datos del convenio</h1>
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
            <label for="">Nombre del convenio</label>
            <input type="text" name="nombre_convenio" class="form-control" value="<?php echo $nombre_convenio;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Empresa del convenio</label>
            <input type="text" name="empresa_convenio" class="form-control" value="<?php echo $empresa_convenio ?>" disabled>           
        </div>

        <div class="form-group">
            <label for="">Fecha del convenio</label>
            <input type="text" name="fecha_convenio" class="form-control" value="<?php echo $fecha_convenio;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Fecha de culminacion del convenio</label>
            <input type="text" name="fecha_culminacion" class="form-control" value="<?php echo $fecha_culminacion;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Documento del vehiculo</label>
            <div class="input-group">
                <input type="text" name="doc_vehiculo" class="form-control" value="<?php echo $doc_convenio;?>" disabled>
                <?php if(!empty($doc_convenio)): ?>
                    <div class="input-group-append">
                        <a href="../docvehiculos/<?php echo $doc_convenio; ?>" target="_blank" class="btn btn-info">
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
