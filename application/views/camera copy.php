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

                <button type="button" class="btn btn-success prod-btn" style="pointer-events: none">Camera
                    IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/panel">Flat
                    Panel Display IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/sensor">Image Sensor IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/interface">High Speed Interface IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/ic">Application Specific IC</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/board">Chip
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
                        <div class="labeldiv">Camera PHY Interface(Including SER/DES) IP
                            sub-LVDS/MIPI(D-PHY,M-PHY)/HiSPi/LVDS/SLVS(EC,400,200)</div>
                        <div class="contentdiv">
                            <table>
                                <tr>
                                    <th>IP Name</th>
                                    <th>I/F Type</th>
                                    <th>Cont.</th>
                                    <th>Max<br>Freq.<br>Mbps<br>(MHz)</th>
                                    <th>Bit<br>x<br>ch<br>(bit)</th>
                                    <th>Spec.</th>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>40<br>45</td>
                                    <td>55<br>65</td>
                                    <td>90</td>
                                    <td>110<br>130</td>
                                    <td>180<br>350</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">Cameara LINK Interface IP
                            sub-LVDS/MIPI(CSI2,CSI3)/HiSPi-link/SLVS(EC,400,200)-link</div>
                        <div class="contentdiv">
                            <table>
                                <tr>
                                    <th>IP Name</th>
                                    <th>I/F Type</th>
                                    <th>Cont.</th>
                                    <th>Max<br>Freq.<br>Mbps<br>(MHz)</th>
                                    <th>Bit<br>x<br>ch<br>(bit)</th>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>40<br>45</td>
                                    <td>55<br>65</td>
                                    <td>90</td>
                                    <td>110<br>130</td>
                                    <td>180<br>350</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">Cameara CIS(CMOS Image Sensor) Verilog Model IP
                            sub-LVDS/MIPI(CSI2,CSI3)/HiSPi/SLVS(EC,400,200)-CIS</div>
                        <div class="contentdiv">
                            <table>
                                <tr>
                                    <th>IP Name</th>
                                    <th>I/F Type</th>
                                    <th>Cont.</th>
                                    <th>Max<br>Freq.<br>Mbps<br>(MHz)</th>
                                    <th>Bit<br>x<br>ch<br>(bit)</th>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>40<br>45</td>
                                    <td>55<br>65</td>
                                    <td>90</td>
                                    <td>110<br>130</td>
                                    <td>180<br>350</td>
                                </tr>
                            </table>
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