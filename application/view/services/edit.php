

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1>Edit Service</h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home""><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Services</li>
            <li class="active">Edit Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="ggm_content">
        <div class="row">
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" name="ggm_serviceform" id="ggm_serviceform" method="get">
                        <div class="box-body">
                            <div class="ggm_form-group">
                                <label for="ggm_service_name">Service Name</label>
                                <input type="text" class="form-control" name="ggm_service_name" id="ggm_service_name" value="<?php echo htmlspecialchars($service->ser_name, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="ggm_form-group">
                                <label>Locations</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_1"/>
                                        Location 1 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_2"/>
                                        Location 2 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_3"/>
                                        Location 3 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_4"/>
                                        Location 4 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_5"/>
                                        Location 5 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_6"/>
                                        Location 6 </label>
                                    <label>
                                        <input type="checkbox" class="minimal" name="ggm_service_loc" id="loc_7"/>
                                        Location 7 </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button class="btn btn-primary btn-flat" type="submit" name="ggm_service_submit" id="ggm_service_submit">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->


            </div>
        </div>
    </section>
    <!-- /.content -->
</aside>

