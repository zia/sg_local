<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin-Salma Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>admin_assets/css/login_style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <section class="login-form">
          
          <?php
            $attributes = array('role' => 'login');
            echo form_open('admin/login_check', $attributes);
          ?>
            <img src="<?php echo base_url()?>assets/images/salma_group_logo.png" class="img-responsive" alt="" />
              
            <input type="text" name="username" placeholder="Username" required="required" class="form-control input-lg" value="<?=$this->input->post('username')?>" />

            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="required" />


            <div class="pwstrength_viewport_progress"></div>

            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
            <div>
              <a href="reset">Reset password</a>
            </div>

          <?=form_close();?>


          <div class="form-links">
            <a href="<?php echo base_url();?>">www.salmagroup.com</a>
          </div>
        </section>  
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="row">
      <div class='col-sm-3'></div>
      <div class='col-sm-6'>
        <div>
          <?php if($this->session->flashdata('error')){?>
              <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                      <div class="alert alert-danger">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Warning !</strong> <?php echo $this->session->flashdata('error'); ?><br>Is This An Error ? <a href="<?=base_url()?>admin/reset_session" type="button" class="btn btn-xs btn-primary">Click</a> Here To Log Out From Other Devices.
                      </div>
                  </div>
              </div>
          <?php } ?>
        </div>
      </div>
      <div class='col-sm-3'></div>
    </div>
    <p>
      <br>
      <br>
    </p>     
  </div>
  <script src="<?php echo base_url()?>admin_assets/js/login_script.js"></script>
</body>
</html>
