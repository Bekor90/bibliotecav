<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
	    <div class="starter-template">
	      <h3 class="text-primary">Registrar Usuario</h3>
	       </br></br>

		<form id="formBusquedaG" method="POST" action="<?=base_url();?>main/registrar">
	        	<div class="container">
				<div class="row">
				<div class="col-xs-2 col-md-2"></div>				
			<div class="col-xs-4 col-md-4">

				<div class="form-group">
				 	<label for="lblogin">Login</label>
		        	<input type="text" class="form-control" placeholder="ingresa aqui el login" id="login" name="login"></input>
		        </div> <!-- form-group -->

				<div class="form-group">
				 	<label for="lbpassword">Password</label>
		        	<input type="password" class="form-control" placeholder="ingresa aqui el password" id="password" name="password"></input>
		        </div> <!-- form-group -->

		        <div class="form-group">
		         	<label for="lbveri_pass">Verificación password</label>
		        	<input type="password" class="form-control" placeholder="ingresa aqui el password" id="veri_pass" name="veri_pass"></input>
		        </div> <!-- form-group -->

				<div class="form-group">
				 	<label for="lbnombre">Nombre</label>
		        	<input type="text" class="form-control" placeholder="ingresa aqui el nombre" id="nombre" name="nombre"></input>
		        </div> <!-- form-group -->

		        <div class="form-group">
				 	<label for="lbapellidos">Apellidos</label>
		        	<input type="text" class="form-control" placeholder="ingresa aqui los apellidos" id="apellidos" name="apellidos"></input>
		        </div> <!-- form-group -->

		    </div> <!-- col-xs-4 col-md-4 -->
			<div class="col-xs-4 col-md-4">
		         <div class="form-group">	
				   <label for="lbvinculo">Vinculo</label>
				   <div class="controls">
				   <select class="form-control" name="vinculo" id="vinculo">
						  <option value="estudiantePregrado">Estudiante pregrado</option>
						  <option value="egresado">Egresado</option>
						  <option value="profesor">Profesor</option>
						  <option value="administrativo">Administrativo</option>
					</select>
					</div>
				</div> <!-- form-group -->

				<div class="form-group">
				 	<label for="lbcorreo">Correo</label>
		        	<input type="email" class="form-control" placeholder="ingresa aqui el correo" id="correo" name="correo"></input>
		        </div> <!-- form-group -->		 		     

		         <div class="form-group">	
				   <label for="lbnivelEscolar">Nivel escolar</label>
				   <div class="controls">
				   <select class="form-control" name="nivel_escolar" id="nivel_escolar">
					  <option value="primaria">Primaria</option>
					  <option value="bachiller">Bachiller</option>
					  <option value="tecnicoProfesional">Tecnico profesional</option>
					  <option value="tecnologoProfesional">Tecnologo profesional</option>
					  <option value="especializado">Especializado</option>
					  <option value="maestria">Maestria</option>
					</select>
					</div>
				</div> <!-- form-group -->

				<div class="form-group">	
				   <label for="lbpregunta">Pregunta secreta</label>
				   <div class="controls">
				   <select class="form-control" name="pregunta" id="pregunta">
					  <option value="madre">Nombre de su madre?</option>
					  <option value="mascota">Nombre de la primera mascota</option>
					  <option value="profesor">Nombre del profesor preferido</option>
					</select>
					</div>
				</div> <!-- form-group -->
		       <div class="form-group">
				 	<label for="lbrespuesta">Respuesta</label>
		        	<input type="text" class="form-control" placeholder="ingresa aqui su respuesta" id="respuesta" name="respuesta"></input>
		        </div> <!-- form-group -->			

			 </div>  <!-- col-xs-4 col-md-4 -->			
				<div class="col-xs-2 col-md-2"></div>
			<div class="col-xs-12 col-md-12">
				<center>
					<button  type="submit" id="registrar" value="registrar" class="btn btn-primary btn-lg"> Registrarse
					</button>						
					</center>
			</div>
				</div>	 <!-- row --> 					
				</div>    <!-- container--> 
		</form>
</div>
</div>
</body>