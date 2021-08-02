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

        $menu_data['home_active_class'] = 'active';
		$menu_data['about_active_class'] = '';
		$menu_data['products_active_class'] = '';
		$menu_data['contact_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>



<!-- Status message -->
<?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
?>

    <!-- ================================================ -->

    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="overlay"></div>
                <div class="col-lg-6 col-lg-offset-2">
                    <h1>Technology <br />That <b>Keeps Evolving</b></h1>
                    <h3>“CURIOUS” IS IP & FABLESS DESIGN COMANY FOR THE PURPOSE OF DEVELOPING AND DESIGNING ANALOG
                        PRODUCTS.</h3>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- headerwrap -->

    <!-- PORTFOLIO SECTION -->
    <div id="dg">
        <div class="container">
            <div class="row centered">
                <h2 style="margin-bottom: 40px;">PRODUCTS</h2>
                <h4 style="margin-bottom: 60px; font-weight: 300;">See our industry-leading low-power, high-performance,
                    multi-standard
                    silicon IP solutions below.
                </h4>

                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/camera">
                    <div class="wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <div>Camera IP​</div>
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-1.jpg" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/panel">
                    <div class="wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-2.jpg" alt=""></a>
                        <div>Flat Panel Display IP</div>
                    </div>
                </div>

                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/sensor">
                    <div class="wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-3.jpg" alt=""></a>
                        <div>Image Sensor IP</div>
                    </div>
                </div>
                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/interface">
                    <div class="wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-3.jpg" alt=""></a>
                        <div>High Speed Interface IP</div>
                    </div>
                </div>

                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/ic">
                    <div class=" wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-4.jpg" alt=""></a>
                        <div>Application Specific IC</div>
                    </div>
                </div>

                <div class="col-lg-4 prod_redirect" data-url="<?= base_url()?>index.php/Products/board">
                    <div class="wrapperDiv">
                        <img src="<?= base_url()?>assets/img/link_icon.png" alt="" class="linkIcon">
                        <a href="#"><img src="<?= base_url()?>assets/img/prod-5.jpg" alt=""></a>
                        <div>Chip Board</div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- DG -->


    <!-- FEATURE SECTION -->
    <div class="container wb">
        <div class="row centered">
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <h2 sytle="margin-bottom: 40px; ">THE BEST EXPERIENCE EVER</h2><br /><br />
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/_VMYPLXnd7E"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <br><br><br><br>
            </div>


        </div><!-- row -->
    </div><!-- container -->


    <div id="lg" sytle="margin-top: 60px; ">
        <div class="container">
            <div class="row centered">
                <h2>OUR CUSTOMER & PARTNET COMPANY</h2>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/panasonic.jpg" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/Sony.jpg" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/Nikon.jpg" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/sharp.jpg" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/NEC.jpg" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/partner/Fuji.jpg" alt="">
                </div><br>
            </div><!-- row -->
            <div class="row centered" style="hieght: 40px; line-height: 40px;"><a
                    href="<?= base_url()?>index.php/Home/about#r">
                    <h4>And more...</h4>
                </a></div>
        </div><!-- container -->
    </div><!-- dg -->

    <!-- FOOTER -->
    <div id="f">
        <div class="container">
            <div class="row centered">
                <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a
                    href="#"><i class="fa fa-dribbble"></i></a>

            </div><!-- row -->
        </div><!-- container -->

    </div>
    <! -- r wrap -->


        <!-- FOOTER -->
        <div id="f">
            <div class="container">
                <div class="row centered">
                    <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a
                        href="#"><i class="fa fa-dribbble"></i></a>

                </div><!-- row -->
            </div><!-- container -->
        </div><!-- Footer -->


        <!-- MODAL FOR CONTACT -->
       

    </div><!-- Footer -->


    <!-- MODAL FOR CONTACT -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>






<!-- ================================================ -->
<!-- Footer Section -->

<?php
    $this->load->view("includes/footer");
?>


<!-- ================================================ -->