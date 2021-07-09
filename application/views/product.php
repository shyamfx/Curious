<!-- ================================================ -->
<!-- Header Section -->
<?php

    $this->load->view("includes/header");
?>

<!-- ================================================ -->

<body>
    <!-- ================================================ -->
    <!-- Fixed navbar -->
    <?php

        $menu_data['home_active_class'] = '';
		$menu_data['about_active_class'] = '';
		$menu_data['products_active_class'] = 'active';
		$menu_data['contact_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>

    <!-- ================================================ -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="overlay"></div>
                <div class="col-lg-6 col-lg-offset-2">
                    <h1><b>PRODUCTS</b></h1>
                    <h3 style="text-transform: capitalize">Curioustek is the leading provider of DSP based
                        Silicon IP solutions targeted for both Data Processing (Datacenter) and Data Generation (IoT End
                        Devices). WE PROVIDE IC, LSI AND IP LICENCE MAINLY FOR INTERFACE PRODUCT USE.</h3>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- headerwrap -->

    <!-- PRODUCT SECTION -->
    <div id="dg">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-4" id="prod01">
                    <div class="wrapperDiv">
                        <img src="assets/img/link_icon.png" alt="" class="linkIcon">
                        <div>Camera IP​</div>
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-1.jpg" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-4" id="prod02">
                    <div class="wrapperDiv">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-2.jpg" alt=""></a>
                        <div>Flat Panel Display IP</div>
                    </div>
                </div>

                <div class="col-lg-4" id="prod03">
                    <div class="wrapperDiv">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-3.jpg" alt=""></a>
                        <div>Image Sensor IP</div>
                    </div>
                </div>
                <div class="col-lg-4" id="prod04">
                    <div class="wrapperDiv">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-3.jpg" alt=""></a>
                        <div>High Speed Interface IP</div>
                    </div>
                </div>

                <div class="col-lg-4" id="prod05">
                    <div class="wrapperDiv">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-4.jpg" alt=""></a>
                        <div>Application Specific IC</div>
                    </div>
                </div>

                <div class="col-lg-4" id="prod06">
                    <div class="wrapperDiv">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-5.jpg" alt=""></a>
                        <div>Chip Board</div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- DG -->



    <div id="r">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3 style="color: white">12 Tannery Road #08-07 HB Centre 1 Singapore 347722
                        <BR />
                        CuriousTek Pte., Ltd.
                        <BR />
                        TEL: +65-6681-5756
                    </h3>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
    <! -- r wrap -->

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