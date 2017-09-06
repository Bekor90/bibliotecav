<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="container">
  <div class="row">
  <div class="col-xs-4 col-md-4"></div>
      <div class="col-xs-4 col-md-4">
      <center>
      <h1><?php echo lang('create_user_heading');?></h1>
      </center>
      <p><?php echo lang('create_user_subheading');?></p>     
      <div id="infoMessage"><?php echo $message;?></div> 
<?php echo form_open("RegistrarUsuario");?>

      <div class="form-group">
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name, '', 'class="form-control"', 'placeholder="escribe aqui su nombre"', 'id="nombre"');?>
       </div>

       <div class="form-group">
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name,  '', 'class="form-control"', 'placeholder="escribe aqui su apellido"', 'id="apellido"');?>
      </div>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

     <div class="form-group">
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company, '', 'class="form-control"', 'placeholder="escribe aqui su compañia"', 'id="company"');?>
     </div>

     <div class="form-group">
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email, '', 'class="form-control"', 'placeholder="escribe aqui su email"', 'id="email"');?>
     </div>

      <div class="form-group">
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone, '', 'class="form-control"', 'placeholder="escribe aqui su telefono"', 'id="phone"');?>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password, '', 'class="form-control"', 'placeholder="*****"', 'id="password"');?>
      </div>

     <div class="form-group">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm, '', 'class="form-control"', 'placeholder="*****"', 'id="password_confirm"');?>
      </div>

      <center>
      <p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary btn-lg"');?></p>
      </center>

<?php echo form_close();?>
    </div>  <!-- col-xs-4 col-md-4 -->
        <div class="col-xs-4 col-md-4"></div>
  </div>   <!-- row -->           
</div>    <!-- container--> 