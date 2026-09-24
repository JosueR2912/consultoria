<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/oficios/list_oficios.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Oficios</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Oficios registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Nº Oficio</center></th>
                                    <th><center>nombre Oficio</center></th>
                                    <th><center>Fecha Oficio</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($oficio_datos as $oficio_dato){
                                    $id_oficio = $oficio_dato['id_oficio']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $oficio_dato['n_oficio'];?></td>
                                        <td><?php echo $oficio_dato['nombre_oficio'];?></td>
                                        <td><?php echo $oficio_dato['fecha_oficio'];?></td>

                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_oficio; ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                                                    <a href="update.php?id=<?php echo $id_oficio; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a>
                                                    <a href="delete_oficio.php?id=<?php echo $id_oficio; ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                   <th><center>Nro</center></th>
                                    <th><center>Nº Oficio</center></th>
                                     <th><center>Nombre Oficio</center></th>
                                    <th><center>Fecha de Oficio</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </tfoot>
                            </table>
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


<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Providencias",
                "infoEmpty": "Mostrando 0 a 0 de 0 Providencias",
                "infoFiltered": "(Filtrado de _MAX_ total Providencias)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Providencias",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

</script>