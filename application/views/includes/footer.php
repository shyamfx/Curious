 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                    <div class="container">
                            <h2>Login to Your Account</h2>
                            
                            <!-- Status message -->
                            <?php  
                                if(!empty($success_msg)){ 
                                    echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                                }elseif(!empty($error_msg)){ 
                                    echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                                } 
                            ?>
                            
                            <!-- Login form -->
                            <div class="regisFrm">
                                <form action="<?php echo base_url()?>index.php/Home/login" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="EMAIL" required="">
                                        <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="PASSWORD" required="">
                                        <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                                    </div>
                                    <div class="send-button">
                                        <input type="submit" name="loginSubmit" value="LOGIN">
                                    </div>
                                </form>
                                <p>Don't have an account? <a href="<?php echo base_url('index.php/Home/registration'); ?>">Register</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Model Body end -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script>
// $("#prod01").click(() => {
//     window.location.href = "<?= base_url()?>Home/camera";
// });

$(document).on('click', '.prod_redirect, .prod-btn', function() {
    // alert("ok");
    window.location.href = $(this).data('url');
})
</script>


<script>
const accordion = document.getElementsByClassName('contentbox');

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
        this.classList.toggle('active');
    });
}
</script>

</html>