<!-- ================================================ -->
<!-- Header Section -->
<?php

    $this->load->view("includes/header");
?>

<body>
    <!-- Fixed navbar -->
    <?php

        $menu_data['home_active_class'] = '';
		$menu_data['about_active_class'] = '';
		$menu_data['products_active_class'] = 'active';
		$menu_data['contact_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>
    <!-- Product Menu Section  -->
    <div>

    </div>


    <!-- PRODUCT SECTION -->
    <div id="dg">
        <div class="container">
            <div class="row" style="margin-bottom: 30px">

                <button type="button" class="btn btn-success" id="prod-camera" style="pointer-events: none">Camera
                    IP</button>
                <button type="button" class="btn btn-info" id="prod-panel">Flat Panel Display IP</button>
                <button type="button" class="btn btn-info" id="prod-sensor">Image Sensor IP</button>
                <button type="button" class="btn btn-info" id="prod-interface">High Speed Interface IP</button>
                <button type="button" class="btn btn-info" id="prod-ic">Application Specific IC</button>
                <button type="button" class="btn btn-info" id="prod-board">Chip Board</button>

                <!-- <button type="button" class="btn btn-success">Greenish  btn-success</button>
                <button type="button" class="btn btn-success">Greenish  btn-success</button>
            <button type="button" class="btn btn-info">Information  btn-info</button> <br /><br /><br />
            <button type="button" class="btn btn-light">Light grey  btn-light</button>
            <button type="button" class="btn btn-dark">Blackish  btn-dark</button>
            <button type="button" class="btn btn-danger">Delete Account btn-danger</button>
            <button type="button" class="btn btn-warning">Orange btn-warning</button> -->

            </div>

            <div class="row">


            </div><!-- row -->
        </div><!-- container -->
    </div><!-- DG -->


    <!-- ================================================ -->
    <!-- Inner Footer Section -->

    <?php
    $this->load->view("includes/insidefooter");
?>


    <!-- ================================================ -->


</body>






<!-- ================================================ -->
<!-- Footer Section -->

<?php
    $this->load->view("includes/footer");
?>


<!-- ================================================ -->