<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php echo form_open(base_url()."GuardarArea") ?>
			</br></br>
	    	 <div class="container">
	           <div class="row">
	           <div class="col-xs-3 col-md-3"></div>
	        	<div class="col-xs-6 col-md-6">
	    	 		<div class="form-group">						
					<?php echo form_label("nombre del area", "nombreArea") ?>
					    <div class="controls">
					    <?php echo form_input($input_name) ?>
						</div>
					</div>
				</div>
				<div class="col-xs-3 col-md-3"></div>
			  </div>  <!-- Div row -->
			 </div>  <!-- Div container -->
			 </br></br>
			 <div class="container">
				<div class="row">
				<div class="col-xs-12 col-md-12">	
					<center>
					 <?php echo form_submit($input_submit) ?>
					</center>			
				</div> <!-- Div col-xs-12 col-md-12-->
				</div><!-- Div row-->
			</div> <!-- Div container -->
<?php echo form_close()?>  