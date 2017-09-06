<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<form id="formRegistrarAutor" method="post" action="<?=base_url();?>GuardarAutor">
			</br></br>
	    	 <div class="container">
	           <div class="row">
	        	 <div class="col-xs-6 col-md-4">
	    	 		<div class="form-group">						
					  <label for="nombre">Nombre</label>
					    <div class="controls">
					      <input class="form-control" type="text" placeholder="escribe aqui el nombre" name="nombre" id="nombre">
						</div>
					</div>
				</div>	<!-- Div col-xs-6 col-md-4-->					
				<div class="col-xs-6 col-md-4">
				<div class="form-group">
				  <label for="apellido">Apellido</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui el apellido" name="apellido" id="apellido">
					</div>
				</div>
				</div><!-- Div col-xs-6 col-md-4-->
				</div> <!--row -->
			</div> <!--container -->
			 <div class="container">
	           <div class="row">					
				<div class="col-xs-6 col-md-4">	
				<div class="form-group">
				  <label for="correo">Correo</label>
				    <div class="controls">
				      <input class="form-control" type="email" placeholder="escribe aqui el correo" name="correo" id="correo">
					</div>
				</div>
				</div>  <!-- Div col-xs-6 col-md-4-->
				<div class="col-xs-6 col-md-4">
				<div class="form-group">
				  <label for="acronimo">Acronimo</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui el acronimo" name="acronimo" id="acronimo">
					</div>
				</div>
				</div><!-- Div col-xs-6 col-md-4-->
				</div> <!--row -->
			</div> <!--container -->
			
			 </br></br>
			 <div class="container">
				<div class="row">
				<div class="col-xs-12 col-md-12">	
					<center>
					  <button type="submit" class="btn btn-success btn-lg" id="btnGautor"> Guardar</button>
					</center>			
				</div> <!-- Div col-xs-12 col-md-12-->
				</div><!-- Div row-->
			</div> <!-- Div container -->
</form> 