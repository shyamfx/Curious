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
		$menu_data['products_active_class'] = '';
		$menu_data['contact_active_class'] = 'active';

    $this->load->view("includes/header_menus",$menu_data);
?>

    <!-- ================================================ -->

    <!-- PORTFOLIO SECTION -->
    <div id="dg">
        <div class="container">
            <div class="row" style="text-align: left">
                <h2 style="margin-bottom: 40px;">CONTACT US</h2>
                <h3 style="margin-bottom: 20px; font-weight: 300;">Please use it for the request of the inquiry that our
                    product concerns and material etc.
                </h3>
                <div>
                    CONTACT FORM
                    <br><br>
                    <form method="post" action="../cgi-bin/Webform/webform_e.cgi">
                        <input type="hidden" name="location" value="http://www.curious-jp.com/en/thanks.html">
                        <!--input type="hidden" name="to_mail" value="curious.info&#64;curious-jp.com" /-->
                        <input type="hidden" name="subject" value="To CURIOUS Question">
                        <dl style="margin-left: 20px">
                            <dt><span class="Black_small">Subject</span></dt>
                            <dd><input maxlength="100" size="60" name="subject" type="text" value=""
                                    style="padding-left: 10px; width: 400px;"></dd><br>
                            <dt><span class="Black_small">Company Name</span></dt>
                            <dd><input maxlength="100" size="55" name="your company" type="text" value=""
                                    style="padding-left: 10px; width: 400px;"></dd><br>
                            <dt><span class="Black_small">Your Name</span></dt>
                            <dd><input maxlength="50" size="40" name="your name" type="text" value=""
                                    style="padding-left: 10px; width: 400px;"></dd><br>
                            <dt><span class="Black_small">Your e-mail Address</span></dt>
                            <dd><input maxlength="50" size="50" name="email" type="text" value=""
                                    style="padding-left: 10px; width: 400px;"></dd><br>
                            <dt><span class="Black_small">Your Homepage</span></dt>
                            <dd><input maxlength="50" size="50" name="homepage" type="text" value="http://"
                                    style="padding-left: 10px; width: 400px;"></dd>
                            <br><br>
                            <dt><span class="Black_small">Question</span></dt>
                            <dd><textarea name="question" rows="10" cols="45"></textarea></dd>
                        </dl>
                        <input type="submit" value="  Send  " style="margin-left: 20px">&nbsp;<input type="reset"
                            value="  Clear  ">
                    </form>

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