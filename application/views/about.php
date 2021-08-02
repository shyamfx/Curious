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
		$menu_data['about_active_class'] = 'active';
		$menu_data['products_active_class'] = '';
		$menu_data['contact_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>

    <!-- ================================================ -->

    <div id="blue">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>CURIOUS Corporation
                    </h2>
                    <p>Our Company was established in Junly,2001. We develop Analog/Mixed Signal (Analog/Digital
                        Mixture) IC( Integrate Circuit). In the future, all information processing machines will be
                        presumed to be connected over a form of network or another. As such demands for these machines
                        are expected to increase considerably in the ever-expanding world of communication with this
                        increase demands for the LCD Driver will also undoubtedly rise. With the present lack of analog
                        design capacity in the world due to a shortage of analog engineers. Our main purpose is to work
                        hard to provide our customers with the best expert advice and services possible.
                        <br /><br>
                        <a href="http://www.curious-jp.com/en/pdf/CURIOUS_Corporation.pdf" target="_blank"><img
                                src="<?= base_url()?>assets/img/pdf.svg" width="20" height="20" />Company
                            Introduction</a>
                    </p>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!--  bluewrap -->


    <div class="container w">
        <div class="row centered">
            <h3>Office Address</h3>
            <br><br>
            <div class="col-lg-3">
                <div class="offices">Tokyo Office</div>
                <div class="officedetail">
                    <br>
                    Zip 101-0041<br>
                    Metlife Kanda Sudacho BLD 8F<br>1-chome-10-2, Kanda Sudacho, Chiyoda City, Tokyo-to JAPAN<br>
                    Phone +81-3-5207-2785<br><br>
                    <a href="http://www.curious-jp.com/en/map1.html" target="_blank"><img
                            src="<?= base_url()?>assets/img/map.svg" alt="Google Map" width="46" height="20" hspace="4"
                            align="middle"> Location Map</a><br><br>
                </div>
            </div><!-- col-lg-3 -->

            <div class="col-lg-3">
                <div class="offices">Sendai Design Center</div>
                <div class="officedetail"><br>
                    Zip 980-0802<br>
                    Station Plaza BLD 805<br>13-18 Futsukamachi, Aoba-ku, Sendai, Miyagi JAPAN<br>
                    Phone +81-22-302-6236<br><br>
                    <a href="http://www.curious-jp.com/en/map2.html" target="_blank"><img
                            src="<?= base_url()?>assets/img/map.svg" alt="Google Map" width="46" height="20" hspace="4"
                            align="middle"> Location Map</a><br><br>
                </div>
            </div><!-- col-lg-3 -->

            <div class="col-lg-3">
                <div class="offices">Sendai R&amp;D Center</div>
                <div class="officedetail"><br>
                    Zip 981-3133<br>
                    Izumi Central BLD 404<br>3-chome-10-3, Izimichuo, Izumi-ku, Sendai, Miyagi JAPAN<br>
                    Phone +81-22-346-8435<br><br>
                    <a href="http://www.curious-jp.com/en/map3.html" target="_blank"><img
                            src="<?= base_url()?>assets/img/map.svg" alt="Google Map" width="46" height="20" hspace="4"
                            align="middle"> Location Map</a><br><br>
                </div>
            </div><!-- col-lg-3 -->

            <div class="col-lg-3">
                <div class="offices">Iwate Head Office</div>
                <div class="officedetail"><br>
                    Zip 021-0003<br>
                    Pastrale 3-102<br>4-3, Higashigodai, Ichinoseki, Iwate JAPAN<br>
                    Phone +81-191-32-5257<br><br>
                    <a href="http://www.curious-jp.com/en/map4.html" target="_blank"><img
                            src="<?= base_url()?>assets/img/map.svg" alt="Google Map" width="46" height="20" hspace="4"
                            align="middle"> Location Map</a><br><br>
                </div>
            </div><!-- col-lg-3 -->

            <div class="col-lg-3">
                <div class="offices">Singapore Office</div>
                <div class="officedetail"><br>
                    Zip 347722<br>
                    12 Tannery Road #08-07 HB Centre 1 Singapore<br>
                    Phone +65-6681-5756<br><br>
                    <a href="http://www.curious-jp.com/en/map6.html" target="_blank"><img
                            src="<?= base_url()?>assets/img/map.svg" alt="Google Map" width="46" height="20" hspace="4"
                            align="middle"> Location Map</a><br><br>
                </div>
            </div><!-- col-lg-3 -->

        </div><!-- row -->
        <br>
        <br>
    </div><!-- container -->


    <!-- PORTFOLIO SECTION -->
    <div id="dg">
        <div class="container">
            <div class="row centered">
                <h4>OFFICERS & OTHERS</h4>
                <br>

                <div style="text-align: left; max-width: 400px; margin-left: auto; margin-right: auto">
                    <div class="officers"><span>Jan-Jue Chang</span> Chairman</div>
                    <div class="officers"><span>Takayuki Onodera</span> President &amp; CEO</div>
                    <div class="officers"><span>Toru Iijima</span> Director</div>
                    <div class="officers"><span>Ray Chen</span> Director (USA)</div>
                    <div class="officers"><span>Joe Lin</span> Director (TAIWAN)</div>
                    <div class="officers"><span>Eric Chun</span>g Auditor (TAIWAN)</div>
                    <div class="officers"><span>Jun Hasegawa</span> CTO</div>
                    <div class="officers"><span>Takefumi Yoshikawa</span> Technical advisor<br>Professor, Toyama
                        Preectual
                        University </div>

                </div>

            </div><!-- row -->
        </div><!-- container -->
    </div><!-- DG -->




    <div id="r">
        <div class="container">
            <div class="row" style="color: white">
                <h4 style="text-align: center; margin-bottom: 40px">Our Customer & Partner Company</h4>

                <div class="col-lg-4">
                    Panasonic Corporation(Japan)<br>
                    Panasonic Semiconductor Solutions Co., Ltd.(Japan)<br>
                    Nuvoton Technology(Japan)<br>
                    SONY Coporation(Japan)<br>
                    SONY Semiconductor Solutions Coporation(Japan)<br>
                    Nikon Corporation(Japan)<br>
                    Denso Corporation(Japan)<br>
                    Renesas Electronics Corporation(Japan)<br>
                    SHARP Coporation(Japan)<br>
                    NEC Coporation(Japan)<br>
                    NEC Space Technologies(Japan)<br>
                    FUJIFILM Co.,Ltd.(Japan)<br>
                    Infineon Technologies(Germany) Infineon<br>
                    Cypress Semiconductor Corporation(USA)<br>
                    Cypress Innovates(Japan)<br>
                    Brillnics Japan Inc.(Japan) Brillnics Japan<br>
                    Brookman Technology Inc.(Japan)<br>
                    Rosnes Corporation(Japan)<br>
                    Imagica Technologies Inc.(Canada) Imagica<br>
                    Metria Sensors Inc.(Canada) Metrio<br>
                    Huawei Technologies Co., Ltd.(China) HUAWEI<br>
                    HiSilicon Technologies Co., Ltd.(China) HiSilicon<br>
                    Allwinner Technologies Co., Ltd.(China) Allwinner<br>
                    Vimicro Corporation(China) Vimicro<br>
                    Viewtel Corporation(USA) Viewtel<br>
                    Orbbec 3D Technology International, Inc.(USA) Orbbec<br>
                    Gpixel Inc.(China) Gpixel<br>
                    Shanghai CelePixel Co. Ltd(China) CelePixel<br>
                    Brillnics Inc.(Tawiwan) Brillnics<br>
                    AutoChips Technology Inc.(China) AutoChips<br>
                    Hangzhou Hikvision Digital Technology Co., Ltd.(China) HIKvision<br>
                    HOLTEK Semiconductor Inc.(Taiwan) Holtek<br>
                    Winbond Electronics Corporation(Taiwan) Winbond<br>
                </div>
                <div class="col-lg-4">
                    Foxconn Technology Group(Taiwan) Foxconn<br>
                    Hon Hai Precision Industry(Taiwan) HonHai<br>
                    MediaTek(Taiwan) MTK<br>
                    Alchip Technologies, Ltd.(Taiwan) Alchip<br>
                    Faraday Technology(Taiwan) Faraday<br>
                    Faraday Technology Japan(Japan)<br>
                    Global Unichip(Taiwan) GUC<br>
                    VeriSilicon Inc.(USA) VeriSilicon<br>
                    Progate Group Corporation(Taiwan) PGC<br>
                    Brite Semiconductor Corporation(China) Brite<br>
                    TOSHIBA Corporation(Japan)<br>
                    MegaChips Corporation(Japan)<br>
                    Socinext Corporation(Japan)<br>
                    M31 Technology (Taiwan) M31<br>
                    ARM Ltd. (UK) ARM<br>
                    Toshiba Information Systems Corporation(Japan)<br>
                    Sanei Hytechs Co.,Ltd.(Japan)<br>
                    Toppan Printing Co.,Ltd.(Japan)<br>
                    Toppan Technical Design Center Co., Ltd.(Japan)<br>
                    Shanghai Bwave Technology Co.,Ltd.(China)Bwave<br>
                    Savarti Ltd. (USA)<br>
                    HOYA Corporaion(Japan)<br>
                    Japan Systemware(Japan) NSW<br>
                    Uozu Device Engineering Coporation(Japan)<br>
                    Linear Cell Design(Japan)<br>
                    Analogist(Japan)<br>
                    Terapixel Technologies Corporaion(Japan)<br>
                    Taiwan Semiconductor Manufacturing Company(Taiwan) TSMC<br>
                    TSMC Japan Limited(Japan) TSMCJ<br>
                    United Microelectronics Company(Taiwan) UMC<br>
                    Samsung Electronics Co., Ltd.(South Korea) Samsung<br>
                    Samsung Japan Corporation(Japan)<br>
                    UMC Group Japan(Japan) UMCGJ<br>
                </div>
                <div class="col-lg-4">
                    Towerjazz Panasonic Simiconductor Corporation(Japan) TPSCo<br>
                    Globalfoundries(USA) GF<br>
                    Semiconductor Manufacturing International Corporation(China) SMIC<br>
                    FUJIFILM Degital Techno Corpoation(Japan)<br>
                    HITACHI ULSI Systems Co.,Ltd.(Japan)<br>
                    HITACHI Solutions Technology Co.,Ltd.(Japan)<br>
                    OKI Engineering Co.,Ltd.(Japan)<br>
                    ASE Japan Co.,Ltd.(Japan)<br>
                    MITSUI High-tech, Inc.(Japan)<br>
                    OOI Electric Co.,Ltd.(Japan)<br>
                    TAITEC Corporation(Japan)<br>
                    NEC Tohoku, Ltd.(Japan)<br>
                    Denken, Co.,Ltd.(Japan)<br>
                    ACORN Logic Technology Corporation(Japan)<br>
                    Hong Xiang Technology Co.,Ltd.(Taiwan) HXT<br>
                    Altera Japan Corporation(Japan) Altera<br>
                    KANEMATSU Corporation(Japan) (Agant) [IC]<br>
                    Transilicon Corporation(China) (Agant) [IC & IP]Transilicon<br>
                    Shanghai Jiatao Industrial Co.,LTD(China) (Agant) [IP] Jiatao<br>
                    Zuiki Inc.(China/Japan) (Agant) [IP] Zuiki<br>
                    Triton Corporation(Taiwan/Japan) (Agant) [IP] Triton<br>
                    Maple Technology Inc.(South Korea) (Agant) [IC]<br>
                    UNIPIX Corporation(South Korea) (Agent) [IP]<br>
                    Marubun Corporation(Japan)<br>
                    Toyama Prefectural University(Japan)<br>
                    Bridge Roots Capital(Taiwan)<br>
                    Element III Venture Capital(Taiwan)<br>
                    Deloite Taiwan(Taiwan)<br>
                    TMI Associates Services Co., Ltd.(Japan)<br>
                    CURIOUS Holding Co., Ltd.(Taiwan)<br>
                    CURIOUS Tek (Singapore) CTK<br>
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
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">contact us</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row centered">
                            <p>We are available 24/7, so don't hesitate to contact us.</p>
                            <p>
                                Somestreet Ave, 987<br />
                                London, UK.<br />
                                +44 8948-4343<br />
                                hi@blacktie.co
                            </p>
                            <div id="mapwrap">
                                <iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Save & Go</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->

</body>



<!-- ================================================ -->
<!-- Footer Section -->

<?php
    $this->load->view("includes/footer");
?>


<!-- ================================================ -->