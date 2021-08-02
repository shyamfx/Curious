<!-- FOOTER -->
<div id="f">
    <div class="container">
        <div class="row centered">
            <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                    class="fa fa-linkedin"></i></a>
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
                <h4 class="modal-title" id="myModalLabel">User Login</h4>
            </div>
            <div class="modal-body">
                <div class="row centered">
                    <div id="login">
                        <form action="#" method="get">
                            User ID：<input name="UserID" type="text" size="10" maxlength="10" value="" accesskey="E"
                                tabindex="1"><br><br>
                            Password：<input name="pass" type="password" size="10" maxlength="10" value="" accesskey="Q"
                                tabindex="2"><br><br>

                            <button type="button" class="btn btn-info">Login</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="font-weight: bold">
                Please click <a href="<?= base_url()?>index.php/Home/contact" class="contactbtn">here</a> to inquiry
                NDA.
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->








<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->