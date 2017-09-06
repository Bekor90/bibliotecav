<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<form id="formEditarPalabra" method="post" action="<?=base_url();?>EditarPalabra">
			</br></br>
	    	 <div class="container">
	           <div class="row">
	           <div class="col-xs-3 col-md-3"></div>
	        	<div class="col-xs-6 col-md-6">
	    	 		<div class="form-group">						
					  <label for="titulo">Nombre Palabra Clave</label>
					    <div class="controls">
					      <input class="form-control" type="text" value="<?=$nombre?>" name="palabraClave" id="palabraClave">
						</div>
					</div>
				</div>
				<input  type="hidden" value="<?=$id?>" name="id" id="id">
				<div class="col-xs-3 col-md-3"></div>
			  </div>  <!-- Div row -->
			 </div>  <!-- Div container -->
			 </br></br>
			 <div class="container">
				<div class="row">
				<div class="col-xs-12 col-md-12">	
					<center>
					  <button type="submit" class="btn btn-success btn-lg" id="btnEpalabra"> Guardar</button>
					</center>			
				</div> <!-- Div col-xs-12 col-md-12-->
				</div><!-- Div row-->
			</div> <!-- Div container -->
</form> 