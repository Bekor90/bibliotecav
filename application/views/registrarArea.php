<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<form id="formRegistrarArea" method="post" action="<?=base_url();?>GuardarArea">
			</br></br>
	    	 <div class="container">
	           <div class="row">
	           <div class="col-xs-3 col-md-3"></div>
	        	<div class="col-xs-6 col-md-6">
	    	 		<div class="form-group">						
					  <label for="titulo">Nombre Area</label>
					    <div class="controls">
					      <input class="form-control" type="text" placeholder="escribe aqui el nombre del area" name="nombreArea" id="nombreArea">
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
					  <button type="submit" class="btn btn-success btn-lg" id="btnGarea"> Guardar</button>
					</center>			
				</div> <!-- Div col-xs-12 col-md-12-->
				</div><!-- Div row-->
			</div> <!-- Div container -->
</form>   