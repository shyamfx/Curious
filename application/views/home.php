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
            <br><br>
            <div class="col-lg-8 col-lg-offset-2">
                <h2 sytle="margin-bottom: 40px; ">THE BEST EXPERIENCE EVER</h2><br /><br />
                <!-- <p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes
					love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating
					a whole story the audience embraces. That’s when the brand can truly flex its muscles.</p>
				<p><br /><br /></p> -->
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/_VMYPLXnd7E"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-2"></div>

        </div><!-- row -->
    </div><!-- container -->


    <div id="lg" sytle="margin-top: 60px; ">
        <div class="container">
            <div class="row centered">
                <h2>OUR CUSTOMER & PARTNET COMPANY</h2>
                <div class="col-lg-2 col-lg-offset-1">
                    <img src="<?= base_url()?>assets/img/c01.gif" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/c02.gif" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/c03.gif" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/c04.gif" alt="">
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url()?>assets/img/c05.gif" alt="">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- dg -->


    <div id="r">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
                    <p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is
                        a designer in their own right. And there are a few principles we believe—and we believe everyone
                        should believe—about our design craft. These truths drive us, motivate us, and ultimately help
                        us redefine the power of design.</p>
                </div>
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