<!-- Right side column. Contains the navbar and content of the page -->
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1> Service List </h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home"><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Service</li>
            <li class="active">Service List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="ggm_content">
        <div class="form-group">
            <a class="btn btn-primary btn-flat" type="button" name="ggm_add_service" id="ggm_add_service" href="<?php echo URL; ?>services/add">Add Service</a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"> </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="ggm_servicelist" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($service_list as $service) { ?>
                            <tr>
                                <td><?php if(isset($service->id)) echo htmlspecialchars($service->id, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php if(isset($service->ser_name)) echo htmlspecialchars($service->ser_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><a href="<?php echo URL . 'services/editservice/' . htmlspecialchars($service->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit">edit</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Service Name</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</aside>


<link href="<?php echo URL; ?>/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="<?php echo URL; ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL; ?>js/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo URL; ?>js/AdminLTE/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#ggm_servicelist").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

