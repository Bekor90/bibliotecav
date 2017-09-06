<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<form id="formRegistrarCatalogacion" method="post" action="<?=base_url();?>GuardarCatalogacion">
	    	 <div class="container">
	           <div class="row">
	        	<div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo" class=" control-label">Tipo de material</label>
					    <div class="controls">
					      <input type="text" class="form-control" placeholder="escribe aqui el tipo de material" name="tipoMaterial" id="tipoMaterial" />
						</div>
					</div>
				</div>	
				<div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo">Titulo principal</label>
					    <div class="controls">
					      <input type="text"  class="form-control" placeholder="escribe aqui el titulo principal" name="tituloPrincipal" id="tituloPrincipal"/>
						</div>
					</div>
				</div>
				<div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo">Titulo secundario</label>
					    <div class="controls">
					      <input class="form-control" type="text" placeholder="escribe aqui el titulo secundario" name="tituloSecundario" id="tituloSecundario"/>
						</div>
					</div>
				</div>					
				
			</div> <!--row -->
			</div> <!--container -->
			</br>
			 <div class="container">
	           <div class="row">
	           <div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo">Fecha de creacion</label>
					    <div class="controls">
					      <input class="form-control" type="date" name="fechaCreacion" id="fechaCreacion"/>
						</div>
					</div>
				</div>
	        		
				<div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo">Fecha de publicacion</label>
					    <div class="controls">
					      <input class="form-control" type="date" name="fechaPublicacion" id="fechaPublicacion"/>
						</div>
					</div>
				</div>
				<div class="col-xs-3 col-md-3">
	    	 		<div class="form-group">						
					  <label for="titulo">Fecha de catalogación</label>
					    <div class="controls">
					      <input class="form-control" type="date" name="fechaCatalogacion" id="fechaCatalogacion"/>
						</div>
					</div>
				</div>					
				
			</div> <!--row -->
			</div> <!--container -->
			</br></br>

			 <div class="container">
			 <div class="row">				
				<div class="col-xs-3 col-md-3">
					<div class="form-group">					
						<label for="areas">Areas</label>
				 		<div class="controls">										
				  		 <select  class="form-control" name="area" id="area">
				    	  <option value="todas">Todas</option>
						   <?php $areas = getAreas();?>
						   <?php foreach($areas as $row): ?>						
						     <option value="<?php echo $row->nombre?>"><?php echo $row->nombre?></option>	<!-- Se listan una por una-->
					       <?php endforeach; ?>
						 </select>
				 		</div>
			    	</div> <!--form-group -->
			    </div> <!--col-xs-3 col-md-3 -->
			    <div class="col-xs-3 col-md-3">
					<div class="form-group">					
						<label for="areas">Palabras clave</label>
				 		 <div class="controls">										
						   <select  class="form-control" name="palabras" id="palabras">
						    <option value="todas">Todas</option>
								<?php $palabrasClave = getPalabras();?>
								<?php foreach($palabrasClave as $row): ?>						
								  <option value="<?php echo $row->nombre?>"><?php echo $row->nombre?></option>	<!-- Se listan una por una-->
							     <?php endforeach; ?>
							</select>
				  		</div>
			    	</div> <!--form-group -->
			    </div> <!--col-xs-3 col-md-3 -->
				<div class="col-xs-3 col-md-3">
					<div class="form-group">					
						<label for="areas">Autores</label>
				 		 <div class="controls">										
						   <select  class="form-control" name="autores" id="autores">
						    <option value="todas">Todas</option>
								<?php $autores = getAutores();?>
								<?php foreach($autores as $row): ?>						
								  <option value="<?php echo $row->apellido?>"><?php echo $row->apellido?></option>	<!-- Se listan una por una-->
							     <?php endforeach; ?>
							</select>
				  		</div>
			    	</div> <!--form-group -->
			    </div> <!--col-xs-3 col-md-3 -->	
		   </div> <!--row -->
		</div>  <!-- Div container 2-->
		</br></br>
		<div class="container">
		<div class="row">
			<div class="col-xs-3 col-md-3">
    	 		<div class="form-group">						
				  <label for="titulo">Editorial</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui la editorial" name="editorial" id="editorial"/>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
			 <div class="form-group">		
				<label for="idioma">Idioma</label>
				<div class="controls">	
			   <select class="form-control" name="idioma" id="idioma">
				<option value="ar">Arabic</option>
				<option value="be">Belarusian</option>
				<option value="be@latin">Bielaruskaja - Belarusian latin</option>
				<option value="bg">Bulgarian</option>
				<option value="bn">Bangla</option>
				<option value="ca">Català - Catalan</option>
				<option value="cs">Cesky - Czech</option>
				<option value="da">Dansk - Danish</option>
				<option value="de">Deutsch - German</option>
				<option value="el">Greek</option>
				<option value="en">English</option>
				<option value="en_GB">English (United Kingdom)</option>
				<option value="es">Español - Spanish</option>
				<option value="et">Eesti - Estonian</option>
				<option value="fi">Suomi - Finnish</option>
				<option value="fr">Français - French</option>
				<option value="gl">Galego - Galician</option>
				<option value="hi">Hindi</option>
				<option value="hr">Hrvatski - Croatian</option>
				<option value="hu">Magyar - Hungarian</option>
				<option value="id">Bahasa Indonesia - Indonesian</option>
				<option value="it">Italiano - Italian</option>
				<option value="ja">Japanese</option>
				<option value="ka">Georgian</option>
				<option value="lt">Lietuviu - Lithuanian</option>
				<option value="mn">Mongolian</option>
				<option value="nb">Norsk - Norwegian</option>
				<option value="nl">Nederlands - Dutch</option>
				<option value="pl">Polski - Polish</option>
				<option value="pt_BR">Português - Brazilian portuguese</option>
				<option value="ro">Româna - Romanian</option>
				<option value="ru">Russian</option>
				<option value="si">Sinhala</option>
				<option value="sk">Slovencina - Slovak</option>
				<option value="sl">Slovenšcina - Slovenian</option>
				<option value="sr">Serbian</option>
				<option value="sr@latin">Srpski - Serbian latin</option>
				<option value="sv">Svenska - Swedish</option>
				<option value="tr">Türkçe - Turkish</option>
				<option value="uz">Uzbek-cyrillic</option>
				<option value="uz@latin">O‘zbekcha - Uzbek-latin</option>
				<option value="zh_CN">Chinese simplified</option>
				<option value="zh_TW">Chinese traditional</option>
			   </select>
			</div>
		   </div>
		</div>   <!-- Div col-xs-3 col-md-3-->

			 <div class="col-xs-3 col-md-3">
			 <div class="form-group">	
			   <label for="formato">Formato</label>
			   <div class="controls">
			   <select class="form-control" name="formato" id="formato">
					  <option value="pdf">pdf</option>
					  <option value="docx">docx</option>
					  <option value="doc">doc</option>
					  <option value="txt">txt</option>
					  <option value="xls">xls</option>
					  <option value="xlt">xlt</option>
					  <option value="ppt">ppt</option>
					  <option value="pps">pps</option>
					  <option value="odt">odt</option>
					  <option value="ott">ott</option>
					  <option value="sxw">sxw</option>
					  <option value="stw">stw</option>
					  <option value="html">html</option>
					  <option value="xml">xml</option>
				</select>
				</div>
			</div>	<!-- Div form-group -->
			</div>	<!-- Div col-xs-3 col-md-3-->		    	
		</div>  <!-- Div row 3-->
		</div>  <!-- Div container 3-->
		</br>
		<div class="container">
		<div class="row">
			<div class="col-xs-3 col-md-3">
    	 		<div class="form-group">						
				  <label for="titulo">Descripción</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui la Descripción" name="descripcion" id="descripcion"/>
					</div>
				</div>
			</div>
		</br></br>
		<div class="container">
		<div class="row">
		<div class="col-xs-12 col-md-12">	
				<center>
				  <button type="submit" class="btn btn-success btn-lg" id="btnGcatalogacion"> Guardar</button>
				</center>
			
		</div> <!-- Div col-xs-12 col-md-12-->
		</div><!-- Div row-->
		</div> <!-- Div container 4-->
</form>   