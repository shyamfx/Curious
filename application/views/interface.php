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
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/panel">Flat
                    Panel Display IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/sensor">Image Sensor IP</button>
                <button type="button" class="btn btn-success prod-btn"
                    data-url="<?= base_url()?>index.php/Products/interface" style="pointer-events: none">High Speed
                    Interface IP</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/ic">Application Specific IC</button>
                <button type="button" class="btn btn-info prod-btn"
                    data-url="<?= base_url()?>index.php/Products/board">Chip
                    Board</button>
            </div>

            <div class="row">
                <div class="accordionbox">
                    <div class="contentbox">
                        <div class="labeldiv">Camera Interface IC</div>
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
                        <div class="labeldiv">Camera LINK Interface RTL for FPGA</div>
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
                        <div class="labeldiv"> FPD LVDS Interface IC</div>
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
                        <div class="labeldiv">FPD mini-LVDS Interface IC</div>
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
                        <div class="labeldiv">IC Package</div>
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