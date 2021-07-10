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

            </div>

            <div class="row">
                <div class="accordionbox">
                    <div class="contentbox active">
                        <div class="labeldiv">Camera PHY Interface(Including SER/DES) IP
                            sub-LVDS/MIPI(D-PHY,M-PHY)/HiSPi/LVDS/SLVS(EC,400,200)</div>
                        <div class="contentdiv">
                            <table>
                                <tr>
                                    <th>IP Name</th>
                                    <th>I/F Type</th>
                                    <th>Cont.</th>
                                    <th>Max Freq.<br>Mbps (MHz)</th>
                                    <th>Bit x ch<br>(bit)</th>
                                    <th>Spec.</th>
                                </tr>
                                <tr class="productrow">
                                    <td>CL12911 In development</td>
                                    <td>A-PHY</td>
                                    <td>TX</td>
                                    <td>4000 (2000)</td>
                                    <td>20x1</td>
                                    <td><a href="http://www.curious-jp.com/pdf/datasheet2/ProductBrief_CL12911IP4000_MIPI_APHY_TX_r102.pdf"
                                            target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg" width="20"
                                                height="20" /></a>
                                    </td>
                                </tr>
                                <tr class="productrow">
                                    <td>CL12912 In development</td>
                                    <td>A-PHY</td>
                                    <td>RX</td>
                                    <td>4000 (2000)</td>
                                    <td>20x2</td>
                                    <td><a href="http://www.curious-jp.com/pdf/datasheet2/ProductBrief_CL12912IP4000_MIPI_APHY_RX_r102.pdf"
                                            target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg" width="20"
                                                height="20" /></a>
                                    </td>
                                </tr>
                                <tr class="productrow">
                                    <td>CL12822 M4R2JM2L</td>
                                    <td>SLVS-EC D-PHY</td>
                                    <td>RX</td>
                                    <td>5000 (2000)</td>
                                    <td>10/8x4</td>
                                    <td><a href="http://www.curious-jp.com/pdf/datasheet2/CL12822M4R2JM2LIP5000_Outline.pdf"
                                            target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg" width="20"
                                                height="20" /></a>
                                    </td>
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
                                <tbody>
                                    <tr>
                                        <th>IP Name</th>
                                        <th>I/F Type</th>
                                        <th>Direction</th>
                                        <th>Max Freq.<br>Mbps (MHz)</th>
                                        <th>Output Format</th>
                                        <th>Bit x ch<br>Lane (bit)</th>
                                        <th>Spec.</th>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12821L</td>
                                        <td rowspan="2">SLVS-EC<br>MIPI
                                            CSI2<br>subLVDS<br>-link</td>
                                        <td>TX</td>
                                        <td rowspan="2">2.5G<br>1.5G<br>850M</td>
                                        <td rowspan="21">
                                            RAW<br>8/10/12/14<br><br>(Option:<br>YUV/RGB<br>/JPEG/etc)</td>
                                        <td rowspan="2">8x8<br>8x12</td>
                                        <td><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download"
                                                width="15" height="20"> NDA</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12822L</th>
                                        <td>RX</td>
                                        <td><br><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download"
                                                width="15" height="20"> NDA</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12611L</th>
                                        <td rowspan="2">subLVDS<br>(Serial)<br>-link</td>
                                        <td>TX</td>
                                        <td rowspan="2">680<br>(340)</td>
                                        <td rowspan="2">8/10/12/14/16<br>xN</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12611-CD12615IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12612L</th>
                                        <td>RX</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12612-CD12616IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12615L</th>
                                        <td rowspan="2">subLVDS<br>(Parallel)<br>-link</td>
                                        <td>TX</td>
                                        <td rowspan="2">650<br>(325)</td>
                                        <td rowspan="2">1x12/14</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12611-CD12615IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12616L</th>
                                        <td>RX</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12612-CD12616IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12631L</th>
                                        <td rowspan="3">MIPI CSI2<br>(D-PHY)</td>
                                        <td>TX</td>
                                        <td rowspan="3">1500<br>(750)</td>
                                        <td rowspan="3">8x1/2/3/4</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12631IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12632L</th>
                                        <td>RX</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12632IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td>CD12633L</th>
                                        <td>TX/RX</td>
                                        <td><a href="http://www.curious-jp.com/en/pdf/datasheet/CD12633IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="5">CD12683L</td>
                                        <td rowspan="10">MIPI
                                            CSI2<br>subLVDS<br>HiSPi<br>LVDS<br>miniLVDS<br>SLVS-400<br>SLVS-200<br>CMOS1.8v<br>CMOS3.3v<br>(Serial)<br>(Parallel)
                                        </td>
                                        <td rowspan="5">TX</td>
                                        <td rowspan="10">1500<br>(750)</td>
                                        <td rowspan="1">4/8x2</td>
                                        <td rowspan="5"><a
                                                href="http://www.curious-jp.com/en/pdf/datasheet/CD12683IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x4</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x8</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x12</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x16</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="5">CD12684L</td>
                                        <td rowspan="5">RX</td>
                                        <td rowspan="1">4/8x2</td>
                                        <td rowspan="5"><a
                                                href="http://www.curious-jp.com/en/pdf/datasheet/CD12684IPE_r000_outline.pdf"
                                                target="_blank"><img src="<?= base_url()?>assets/img/pdf.svg"
                                                    alt="PDF file Download" width="15" height="20"></a></td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x4</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x8</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x12</td>
                                    </tr>
                                    <tr class="productrow">
                                        <td rowspan="1">4/8x16</td>
                                    </tr>
                                </tbody>
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
                                    <th>Output Format</th>
                                    <th>Max Freq.<br>Mbps (MHz)</th>
                                    <th>Bit x ch<br>(bit)</th>
                                </tr>
                                <tr class="productrow">
                                    <td>CD12611V</td>
                                    <td>sub-LVDS<br>(Serial)</td>
                                    <td>RAW 8/10/12/14/16</td>
                                    <td>8/10/12/14/16xN</td>
                                    <td><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download" width="15"
                                            height="20"> NDA</td>
                                </tr>
                                <tr class="productrow">
                                    <td class="White-center-cell" scope="row">CD12615V</td>
                                    <td>sub-LVDS<br>(Parallel)</td>
                                    <td>RAW 12/14</td>
                                    <td>1x12/14</td>
                                    <td><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download" width="15"
                                            height="20"> NDA</td>
                                </tr>
                                <tr class="productrow">
                                    <td class="White-center-cell" scope="row">CD12631V</td>
                                    <td>MIPI CSI2</td>
                                    <td>RAW 10/12</td>
                                    <td>8x1/2/3/4</td>
                                    <td><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download" width="15"
                                            height="20"> NDA</td>
                                </tr>
                                <tr class="productrow">
                                    <td class="White-center-cell" scope="row">CD12701V</td>
                                    <td>HiSPi</td>
                                    <td>RAW 10/12/14/16</td>
                                    <td>10/12/14/16x4/8</td>
                                    <td><img src="<?= base_url()?>assets/img/pdf.svg" alt="PDF file Download" width="15"
                                            height="20"> NDA</td>
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