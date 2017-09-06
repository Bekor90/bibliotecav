<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
  <div class="row">
  <div class="col-xs-4 col-md-4"></div>
      <div class="col-xs-4 col-md-4">
      <center>
      <h1><?php echo lang('login_heading');?></h1>
      </center>
      <p><?php echo lang('login_subheading');?></p>       
      <div id="infoMessage"><?php echo $message;?></div> 

      <?php echo form_open("Ingresar");?>
          <div class="form-group">
          <?php echo lang('login_identity_label', 'identity');?>
          <?php echo form_input($identity, '', 'class="form-control"', 'placeholder="escribe aqui tu username"', 'id="username"');?>
          </div>
          <div class="form-group">      
          <?php echo lang('login_password_label', 'password');?>
          <?php echo form_input($password, '', 'class="form-control"', 'id="password"');?>
          </div>

          <div class="form-group">
          <?php echo lang('login_remember_label', 'remember');?>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          </div>
          </div>  <!-- col-xs-4 col-md-4 -->
        <div class="col-xs-4 col-md-4"></div>
  </div>   <!-- row -->           
</div>    <!-- container--> 

<div class="container">
  <div class="row">
        <div class="col-xs-2 col-md-2"></div>
        <div class="col-xs-8 col-md-8">
          <div class="form-group">  
            <center>
            <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-lg"');?>
            </center>
          </div>

      <?php echo form_close();?>
            <div class="form-group"> 
             <center>
            <p><a href="<?=base_url();?>OlvidePassword"><?php echo lang('login_forgot_password');?></a></p>
             </center>
            </div> 
        </div><!-- col-xs-12 col-md-12 -->
        <div class="col-xs-2 col-md-2"></div>
  </div>   <!-- row -->           
</div>    <!-- container--> 