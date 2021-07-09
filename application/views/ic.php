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

                <button type="button" class="btn btn-info prod-btn" data-url="<?= base_url()?>index.php/Products/camera">Camera
                    IP</button>
                <button type="button" class="btn btn-info prod-btn" data-url="<?= base_url()?>index.php/Products/panel">Flat
                    Panel Display IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/sensor">Image Sensor IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/interface">High Speed Interface IP</button>
                <button type="button" class="btn btn-success prod-btn"
                    data-url="<?= base_url()?>index.php/Products/ic" style="pointer-events: none">Application Specific IC</button>
                <button type="button" class="btn btn-info prod-btn" data-url="<?= base_url()?>index.php/Products/board">Chip
                    Board</button>

                <!-- <button type="button" class="btn btn-success">Greenish  btn-success</button>
                <button type="button" class="btn btn-success">Greenish  btn-success</button>
            <button type="button" class="btn btn-info">Information  btn-info</button> <br /><br /><br />
            <button type="button" class="btn btn-light">Light grey  btn-light</button>
            <button type="button" class="btn btn-dark">Blackish  btn-dark</button>
            <button type="button" class="btn btn-danger">Delete Account btn-danger</button>
            <button type="button" class="btn btn-warning">Orange btn-warning</button> -->

            </div>

            <div class="row">
                <!-- <div class="accordion">
                    <div>
                        <input type="radio" name="example_accordion" id="section1" class="accordion__input">
                        <label for="section1" class="accordion__label">Section #1</label>
                        <div class="accordion__content">
                            <p>Section #1</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam
                                quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas
                                earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                        <label for="section2" class="accordion__label">Section #2</label>
                        <div class="accordion__content">
                            <p>Section #2</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam
                                quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas
                                earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="example_accordion" id="section3" class="accordion__input">
                        <label for="section3" class="accordion__label">Section #3</label>
                        <div class="accordion__content">
                            <p>Section #3</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam
                                quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas
                                earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
                </div> -->
                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">About ASIP (custom IP)</div>
                        <div class="contentdiv">
                        I will offer IP matched from our IP source to customer's specification, and execute it to a single purpose evaluation of IP.
                        <img src="http://www.curious-jp.com/images/asip.gif" />
                        </div>
                    </div>
                </div>

                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">About ASIC (custom IC)</div>
                        <div class="contentdiv">
                        ASIC is designed by using our company and other companies IP in the ASIC partner company.
                        <img src="http://www.curious-jp.com/images/asic.gif" />
                        </div>
                    </div>
                </div>

                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">ASIC Partner Company</div>
                        <div class="contentdiv">
                        Our company IP can be used at a low price by using the ASIP/ASIC partner company.
                        <h3>ASIC partner company</h3>
                        <img src="<?= base_url()?>assets/img/company_list.png" />
                        </div>
                    </div>
                </div>
            </div>

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