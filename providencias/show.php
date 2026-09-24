<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/providencias/show_providencia.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Datos del usuario</h1>
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
            <label for="">Cedula del servidor</label>
            <input type="text" name="cedula_servidor" class="form-control" value="<?php echo $cedula_servidor;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Nombre del servidor</label>
            <input type="text" name="nombre_servidor" class="form-control" value="<?php echo $nombre_servidor;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Cargo del servidor</label>
            <input type="text" name="cargo_servidor" class="form-control" value="<?php echo $cargo_servidor;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Fecha de designación</label>
            <input type="text" name="fecha_designacion" class="form-control" value="<?php echo $fecha_designacion;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Número de providencia</label>
            <input type="text" name="n_providencia" class="form-control" value="<?php echo $n_providencia;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Fecha de publicación</label>
            <input type="text" name="fecha_public" class="form-control" value="<?php echo $fecha_public;?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Número de gaceta</label>
            <input type="text" name="n_gaceta" class="form-control" value="<?php echo $n_gaceta;?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Relación de acta de entrega</label>
            <input type="text" name="relacion_acta_entrega" class="form-control" value="<?php echo $relacion_acta_entrega;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Documento de providencia</label>
            <div class="input-group">
                <input type="text" name="doc_providencia" class="form-control" value="<?php echo $doc_providencia;?>" disabled>
                <?php if(!empty($doc_providencia)): ?>
                    <div class="input-group-append">
                        <a href="../docprovidencias/<?php echo $doc_providencia; ?>" target="_blank" class="btn btn-info">
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
