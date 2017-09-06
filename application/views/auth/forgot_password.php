<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
  <div class="row">
  <div class="col-xs-4 col-md-4"></div>
      <div class="col-xs-4 col-md-4">
	      <center>
	      <h1><?php echo lang('forgot_password_heading');?></h1>
	      </center>

			<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
			<div id="infoMessage"><?php echo $message;?></div>

			<?php echo form_open("auth/forgot_password");?>

	       <div class="form-group">
	      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
	      	<?php echo form_input($identity,'', 'class="form-control"', 'id="password"');?>
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
     	 	<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary btn-lg"');?>
     	    </center>
          </div>
          <?php echo form_close();?>
          </div><!-- col-xs-12 col-md-12 -->
        <div class="col-xs-2 col-md-2"></div>
   </div>   <!-- row -->           
   </div>    <!-- container--> 


      
