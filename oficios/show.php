<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/oficios/show_oficio.php');

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
            <label for="">Nombre del servidor</label>
            <input type="text" name="nombre_servidor" class="form-control" value="<?php echo $nombre_oficio;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Cargo del servidor</label>
            <input type="text" name="cargo_servidor" class="form-control" value="<?php echo $n_oficio;?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Fecha de designación</label>
            <input type="text" name="fecha_designacion" class="form-control" value="<?php echo $fecha_oficio;?>" disabled>
        </div>


        <div class="form-group">
            <label for="">Documento de oficio</label>
            <div class="input-group">
                <input type="text" name="doc_oficio" class="form-control" value="<?php echo $doc_oficio;?>" disabled>
                <?php if(!empty($doc_oficio)): ?>
                    <div class="input-group-append">
                        <a href="../docoficios/<?php echo $doc_oficio; ?>" target="_blank" class="btn btn-info">
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
