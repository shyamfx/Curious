
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
		$menu_data['works_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>

<!-- ================================================ -->

<div id="blue">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2">
            <h4>LEARN MORE ABOUT US</h4>
            <p>WE ARE COOL PEOPLE</p>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!--  bluewrap -->


<div class="container w">
    <div class="row centered">
        <br><br>
        <div class="col-lg-3">
            <img class="img-circle" src="<?= base_url()?>assets/img/pic.jpg" width="110" height="110" alt="">
            <h4>Frank Lampard</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            <p><a href="#">@Frank_BlackTie</a></p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3">
            <img class="img-circle" src="<?= base_url()?>assets/img/pic2.jpg" width="110" height="110" alt="">
            <h4>David Wright</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            <p><a href="#">@David_BlackTie</a></p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3">
            <img class="img-circle" src="<?= base_url()?>assets/img/pic3.jpg" width="110" height="110" alt="">
            <h4>Mark Milestone</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            <p><a href="#">@Mark_BlackTie</a></p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3">
            <img class="img-circle" src="<?= base_url()?>assets/img/pic4.jpg" width="110" height="110" alt="">
            <h4>Tania Tissen</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            <p><a href="#">@Tania_BlackTie</a></p>
        </div><!-- col-lg-3 -->

    </div><!-- row -->
    <br>
    <br>
</div><!-- container -->


<!-- PORTFOLIO SECTION -->
<div id="dg">
    <div class="container">
        <div class="row centered">
            <h4>OUR SKILLS</h4>
            <br>
            
        <!-- First Chart -->
        <div class="col-lg-3">
            <canvas id="canvas" height="130" width="130"></canvas>
            <br>
            <script>
                var doughnutData = [
                        {
                            value: 70,
                            color:"#3498db"
                        },
                        {
                            value : 30,
                            color : "#ecf0f1"
                        }
                    ];
                    // var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
            </script>
            <p><b>Design & Brand</b></p>
            <p><small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</small></p>
        </div><!-- /col-lg-3 -->

        <!-- Second Chart -->
        <div class="col-lg-3">
            <canvas id="canvas2" height="130" width="130"></canvas>
            <br>
            <script>
                var doughnutData = [
                        {
                            value: 90,
                            color:"#3498db"
                        },
                        {
                            value : 10,
                            color : "#ecf0f1"
                        }
                    ];
                    // var myDoughnut = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData);
            </script>
            <p><b>Web Development</b></p>
            <p><small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</small></p>
        </div><!-- /col-lg-3 -->
        
        <!-- Third Chart -->
        <div class="col-lg-3">
            <canvas id="canvas3" height="130" width="130"></canvas>
            <br>
            <script>
                var doughnutData = [
                        {
                            value: 50,
                            color:"#3498db"
                        },
                        {
                            value : 50,
                            color : "#ecf0f1"
                        }
                    ];
                    // var myDoughnut = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(doughnutData);
            </script>
            <p><b>Seo Services</b></p>
            <p><small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</small></p>
        </div><!-- /col-lg-3 -->
        
        <!-- Fourth Chart -->
        <div class="col-lg-3">
            <canvas id="canvas4" height="130" width="130"></canvas>
            <br>
            <script>
                var doughnutData = [
                        {
                            value: 80,
                            color:"#3498db"
                        },
                        {
                            value : 20,
                            color : "#ecf0f1"
                        }
                    ];
                    // var myDoughnut = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(doughnutData);
            </script>
            <p><b>Printing</b></p>
            <p><small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</small></p>
        </div><!-- /col-lg-3 -->
            
            
        </div><!-- row -->
    </div><!-- container -->
</div><!-- DG -->




<div id="r">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2">
                <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
                <p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design.</p>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><! -- r wrap -->


<!-- FOOTER -->
<div id="f">
    <div class="container">
        <div class="row centered">
            <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
    
        </div><!-- row -->
    </div><!-- container -->
</div><!-- Footer -->


<!-- MODAL FOR CONTACT -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    Somestreet Ave, 987<br/>
                    London, UK.<br/>
                    +44 8948-4343<br/>
                    hi@blacktie.co
                </p>
                <div id="mapwrap">
    <iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
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