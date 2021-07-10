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

                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/camera">Camera
                    IP</button>
                <button type="button" class="btn btn-success prod-btn"
                    data-url="<?= base_url()?>index.php/Products/panel" style="pointer-events: none">Flat
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

            </div>

            <div class="row">

                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">Flat Panel Display ( LCD / Plasma ) Interface(I/F) IP</div>
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
                        <div class="labeldiv">Flat Panel Display PHY IO ( Driver / Receiver ) Interface(I/F) IP</div>
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

                <br><br>
                <div style="text-align:left; width: 70%; margin-left: auto; margin-right: auto">
                    <p><b>*</b> Flat Panel Display Link and BUS Serializer/Deserializer Product name is same. But the
                        specification difference. If you need it, Please inform us from <a
                            href="<?= base_url()?>index.php/Home/contact" class="contactbtn">here</a> .</p>

                    <p><b>*</b> The specification of describing NDA need to sign our NDA material.<br>
                        If you need it, Please inform us from <a href="<?= base_url()?>index.php/Home/contact"
                            class="contactbtn">here</a> .
                    </p>
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