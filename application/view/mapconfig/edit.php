<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARmt_SaeF9d1GzfqN6M_3p1n_Uti9VqyA"></script>
<script>
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 4,
            center: new google.maps.LatLng(40.081139, -101.993125)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
    #map-canvas {
        height: 400px;
        margin: 0px;
        padding: 0px
    }
    body,td,th {
        font-family: "Source Sans Pro", sans-serif;
    }
</style>

<aside class="ggm_right-side">
<!-- Content Header (Page header) -->
<section class="ggm_content-header">
    <h1>Map Config</h1>
    <ol class="ggm_breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home Page</a></li>
        <li class="active">Map Config</li>
    </ol>
</section>

<!-- Main content -->
<section class="ggm_content">
<div class="row">
<div class="col-md-7">
<!-- general form elements -->
<div class="box box-primary">

<!-- form start -->
<form role="form" name="ggm_map_config" id="ggm_map_config" method="POST" action="<?php echo URL; ?>clients/updatemapconfig">
<input type="hidden" name="id" value="<?php echo htmlspecialchars($client->id, ENT_QUOTES, 'UTF-8'); ?>" />
<div class="box-body">
<h4>Map Setting</h4>
<div class="ggm_form-group">
    <div class="row">
        <div class="col-xs-5">
            <label for="ggm_map_width">Width</label>
            <input type="text" name="ggm_map_width" id="ggm_map_width" class="form-control" value="<?php echo htmlspecialchars($map->map_width, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="col-xs-5">
            <label for="ggm_map_height">Height</label>
            <input type="text" name="ggm_map_height" id="ggm_map_height" class="form-control" value="<?php echo htmlspecialchars($map->map_height, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <div class="row">
        <div class="col-xs-5">
            <label for="ggm_map_latitude">Latitude</label>
            <input type="text" name="ggm_map_lat" id="ggm_map_lat" class="form-control" value="<?php echo htmlspecialchars($map->map_lat, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="col-xs-5">
            <label for="ggm_map_longitude">Longitude</label>
            <input type="text" name="ggm_map_long" id="ggm_map_long" class="form-control" value="<?php echo htmlspecialchars($map->map_long, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <div class="row">
        <div class="col-xs-5">
            <label for="ggm_map_zoomval">Zoom Value</label>
            <input type="text" name="ggm_map_zoomvalue" id="ggm_map_zoomvalue" class="form-control" value="<?php echo htmlspecialchars($map->map_zoom_value, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="col-xs-5" style="margin-top: 30px;">
            <label>
                <input type="checkbox" class="minimal" name="ggm_map_zonedisplay" id="ggm_map_zonedisplay" value="">
                Zone Display </label>
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <h4>Zoom Control Options</h4>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="radio" name="ggm_map_zoomcontrol" id="ggm_map_zoomcontrol_small" value="Small" class="minimal">
                Small </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" name="ggm_map_zoomcontrol" id="ggm_map_zoomcontrol_large" value="Large" class="minimal">
                Large </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" name="ggm_map_zoomcontrol" id="ggm_map_zoomcontrol_default" value="Default" class="minimal">
                Default </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" name="ggm_map_zoomcontrol" id="ggm_map_zoomcontrol_disable" value="Disable" class="minimal">
                Disable </label>
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <label>Control Positioning</label>
    <select class="form-control" name="ggm_map_zoomcontrol" id="ggm_map_zoomcontrol">
        <option value="BOTTOM_CENTER">Bottom Center</option>
        <option value="BOTTOM_LEFT">Bottom Left </option>
        <option value="BOTTOM_RIGHT">Bottom Right</option>
        <option value="LEFT_BOTTOM">Left Bottom</option>
        <option value="LEFT_CENTER">Left Center</option>
        <option value="LEFT_TOP">Left Top</option>
        <option value="RIGHT_BOTTOM">Right Bottom</option>
        <option value="RIGHT_CENTER">Right Center</option>
        <option value="RIGHT_TOP">Right Top</option>
        <option value="TOP_CENTER">Top Center</option>
        <option value="TOP_LEFT">Top Left</option>
        <option value="TOP_RIGHT">Top Right</option>
    </select>
</div>
<div class="ggm_form-group">
    <h4>Map Type Control</h4>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="radio" id="ggm_map_typecontrol_horizontal" name="ggm_map_typecontrol" value="Horizontal Bar">
                Horizontal Bar </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" id="ggm_map_typecontrol_dropmenu" name="ggm_map_typecontrol" value="Dropdown Menu">
                Dropdown Menu </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" id="ggm_map_typecontrol_default" name="ggm_map_typecontrol" value="Default">
                Default </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="radio" id="ggm_map_typecontrol_disable" name="ggm_map_typecontrol" value="Disable">
                Disable </label>
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <label>Control Positioning</label>
    <select class="form-control" name="ggm_map_maptypecontrolpos" id="ggm_map_maptypecontrolpos">
        <option value="BOTTOM_CENTER">Bottom Center</option>
        <option value="BOTTOM_LEFT">Bottom Left </option>
        <option value="BOTTOM_RIGHT">Bottom Right</option>
        <option value="LEFT_BOTTOM">Left Bottom</option>
        <option value="LEFT_CENTER">Left Center</option>
        <option value="LEFT_TOP">Left Top</option>
        <option value="RIGHT_BOTTOM">Right Bottom</option>
        <option value="RIGHT_CENTER">Right Center</option>
        <option value="RIGHT_TOP">Right Top</option>
        <option value="TOP_CENTER">Top Center</option>
        <option value="TOP_LEFT">Top Left</option>
        <option value="TOP_RIGHT">Top Right</option>
    </select>
</div>
<div class="ggm_form-group">
    <h4>Pan Control Options</h4>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="checkbox" name="ggm_map_pancontrol" id="ggm_map_pancontrol" class="minimal">
                Disable </label>
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <label>Control Positioning</label>
    <select class="form-control" name="ggm_map_pancontrolpos" id="ggm_map_pancontrolpos">
        <option value="BOTTOM_CENTER">Bottom Center</option>
        <option value="BOTTOM_LEFT">Bottom Left </option>
        <option value="BOTTOM_RIGHT">Bottom Right</option>
        <option value="LEFT_BOTTOM">Left Bottom</option>
        <option value="LEFT_CENTER">Left Center</option>
        <option value="LEFT_TOP">Left Top</option>
        <option value="RIGHT_BOTTOM">Right Bottom</option>
        <option value="RIGHT_CENTER">Right Center</option>
        <option value="RIGHT_TOP">Right Top</option>
        <option value="TOP_CENTER">Top Center</option>
        <option value="TOP_LEFT">Top Left</option>
        <option value="TOP_RIGHT">Top Right</option>
    </select>
</div>
<div class="ggm_form-group">
    <h4>Scale Control Options</h4>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="checkbox" name="ggm_map_scalecontoptions" id="ggm_map_scalecontoptions" class="minimal">
                Disable </label>
        </div>
    </div>
</div>
<div class="ggm_form-group">
    <label>Control Positioning</label>
    <select class="form-control" name="ggm_map_scaleconpos" id="ggm_map_scaleconpos">
        <option value="BOTTOM_CENTER">Bottom Center</option>
        <option value="BOTTOM_LEFT">Bottom Left </option>
        <option value="BOTTOM_RIGHT">Bottom Right</option>
        <option value="LEFT_BOTTOM">Left Bottom</option>
        <option value="LEFT_CENTER">Left Center</option>
        <option value="LEFT_TOP">Left Top</option>
        <option value="RIGHT_BOTTOM">Right Bottom</option>
        <option value="RIGHT_CENTER">Right Center</option>
        <option value="RIGHT_TOP">Right Top</option>
        <option value="TOP_CENTER">Top Center</option>
        <option value="TOP_LEFT">Top Left</option>
        <option value="TOP_RIGHT">Top Right</option>
    </select>
</div>
<div class="ggm_form-group">
    <h4>Filter Options</h4>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_city" name="ggm_filteroptions" class="minimal">
                City </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_state" name="ggm_filteroptions" class="minimal">
                State </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_zipcode" name="ggm_filteroptions" class="minimal">
                Zip Code </label>
        </div>
    </div>
    <div class="checkbox">
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_locname" name="ggm_filteroptions" class="minimal">
                Location Name</label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_servicename" name="ggm_filteroptions" class="minimal">
                Service Name </label>
        </div>
        <div class="col-xs-3">
            <label>
                <input type="checkbox" id="ggm_filteroptions_doctorname" name="ggm_filteroptions" class="minimal">
                Doctor Name </label>
        </div>
    </div>
</div>
<!-- select -->
<div class="ggm_form-group">
    <label>Page Options</label>
    <select class="form-control" name="ggm_map_pageoptions" id="ggm_map_pageoptions">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
        <option>option 5</option>
    </select>
</div>
<div class="ggm_form-group">
    <h4>Preview</h4>
    <div id="map-canvas"></div>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary btn-flat" name="ggm_map_submit" id="ggm_map_submit">Submit</button>
</div>
</form>
</div>
<!-- /.box -->

</div>
</div>
</section>
<!-- /.content -->
</aside>