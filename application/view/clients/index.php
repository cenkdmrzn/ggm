<!-- Right side column. Contains the navbar and content of the page -->
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1>Client List </h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home"><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Client</li>
            <li class="active">Client List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="ggm_content">
        <div class="form-group">
            <a class="btn btn-primary btn-flat" type="button" name="ggm_add_client" id="ggm_add_client" href="<?php echo URL; ?>clients/add">Add Client</a>
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
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Client Website</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($client_list as $client){?>

                            <tr>
                                <td><?php if(isset($client->id)) echo htmlspecialchars($client->id, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php if(isset($client->client_name)) echo htmlspecialchars($client->client_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php if(isset($client->client_email)) echo htmlspecialchars($client->client_email, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php if(isset($client->client_website)) echo htmlspecialchars($client->client_website, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><a href="<?php echo URL . 'clients/editclient/' . htmlspecialchars($client->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-success btn-sm" class="ggm_client_edit" id="ggm_client_edit">edit</a>


                            </tr>
                            <?php }?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Client Website</th>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo URL; ?>/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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

