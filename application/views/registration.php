<!-- ================================================ -->
<!-- Header Section -->
<?php

    $this->load->view("includes/header");
?>

<!-- ================================================ -->

<!-- ================================================ -->
    <!-- Fixed navbar -->
    <?php

        $menu_data['home_active_class'] = 'active';
		$menu_data['about_active_class'] = '';
		$menu_data['products_active_class'] = '';
		$menu_data['contact_active_class'] = '';

    $this->load->view("includes/header_menus",$menu_data);
?>

    <!-- ================================================ -->


<div class="container">
    <h2>Create a New Account</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="NAME" value="<?php echo !empty($user['name'])?$user['name']:''; ?>" required>
                <?php echo form_error('name','<p class="help-block">','</p>'); ?>
            </div>
            
            <div class="form-group">
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" required>
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="text" name="company_name" placeholder="Company Name" value="<?php echo !empty($user['company_name'])?$user['company_name']:''; ?>">
                <?php echo form_error('company_name','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="text" name="company_website" placeholder="Company Website" value="<?php echo !empty($user['company_website'])?$user['company_website']:''; ?>">
                <?php echo form_error('company_website','<p class="help-block">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
        </form>
        <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>
    </div>
</div>


<!-- ================================================ -->
<!-- Footer Section -->

<?php
    $this->load->view("includes/footer");
?>


<!-- ================================================ -->