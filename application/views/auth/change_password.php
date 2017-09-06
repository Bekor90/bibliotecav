<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
  <div class="row">
  <div class="col-xs-4 col-md-4"></div>
      <div class="col-xs-4 col-md-4">
      <center>
      <h1><?php echo lang('change_password_heading');?></h1>
      </center>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <div class="form-group">
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password'', 'class="form-control"', 'placeholder="*****"', 'id="username"');?>
       </div>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
  </div>  <!-- col-xs-4 col-md-4 -->
        <div class="col-xs-4 col-md-4"></div>
  </div>   <!-- row -->           
</div>    <!-- container--> 
