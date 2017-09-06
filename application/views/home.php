<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	
  <div class="container">
    <div class="starter-template">
      <h1>Bienvenido</h1>
       </br></br>    
        <ul class="nav nav-tabs" id="myTabs" role="tablist"> 
	        <li class="active"><a href="#consultaGeneral" id="consultaGeneral-tab"  role="tab" data-toggle="tab" aria-controls="consultaGeneral">Consulta general</a>
			</li> 
			<li><a href="#consultaAvanzada" role="tab" id="consultaAvanzada-tab" data-toggle="tab" aria-controls="consultaAvanzada">Consulta Avanzada</a>
			</li>  
        </ul> 
	  <div class="tab-content" id="myTabContent">

	 <div class="tab-pane fade active in" role="tabpanel" id="consultaGeneral" aria-labelledby="consultaGeneral-tab">  <!--busqueda General -->
		
		</br></br><h4><p>Por favor ingresa una palabra para realizar la búsqueda de documentos relacionados</p></h4></br></br></br></br>

		<form id="formBusquedaG" method="POST" action="<?=base_url();?>BuscarG">
	    	<div class="container">
				<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
			        	<input type="text" class="form-control" placeholder="Ingrese su palabra" id="palabra" name="palabra"></input>
			        </div>
					<center>
					<button  type="submit" id="buscar" value="Buscar" class="btn btn-primary btn-lg"> Consultar
					</button>						
					</center>
				</div>  <!-- col-xs-12 col-md-12 -->
				</div>	 <!-- row --> 					
			</div>    <!-- container--> 
		</form>
		</br></br>	    		 <!-- tabla con resultado de consulta --> 
	    <?php if($result): ?>   <!-- validando consulta -->
	    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->
	    	<thead>
				<th class="info">Titulo</th>
				<th class="info">Descripcion</th>
			</thead>
			<tbody>
				<?php foreach($result as $row): ?>
				<tr>
					<td><?php echo $row->titulo_principal ?></td>
					<td><?php echo $row->descripcion ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php endif; ?> 
	    <?php if($resultAvanzada): ?>   <!-- validando consulta -->
	    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->
	    	<thead>
				<th class="info">Titulo</th>
				<th class="info">Descripcion</th>
				<th class="info">nombre Autor</th>
				<th class="info">nombre Area</th>
			</thead>
			<tbody>
				<?php foreach($resultAvanzada as $row): ?>
				<tr>
					<td><?php echo $row->titulo_principal ?></td>
					<td><?php echo $row->descripcion ?></td>
					<td><?php echo $row->nombre ?></td>
					<td><?php echo $row->nombre_areas ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php endif; ?>  
	</div> <!-- tab-pane fade active in -->			  

	<!--busqueda avanzada -->
	    <div class="tab-pane fade>" role="tabpanel" id="consultaAvanzada" aria-labelledby="consultaAvanzada-tab"> 
			</br></br>
	    	 <form id="formBusquedaA" method="post" action="<?=base_url();?>BuscarA">
	    	 <div class="container">
	           <div class="row">
	        	 <div class="col-xs-6 col-md-4">
	    	 		<div class="form-group">						
					  <label for="titulo">Titulo</label>
					    <div class="controls">
					      <input class="form-control" type="text" placeholder="escribe aqui el titulo" name="titulo" id="titulo">
						</div>
					</div>
				</div>						
				<div class="col-xs-6 col-md-4">
				<div class="form-group">
				  <label for="autor">Autor</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui el autor" name="autor" id="autor">
					</div>
				</div>
				</div>
				
				<div class="col-xs-6 col-md-4">	
				<div class="form-group">
				  <label for="palabraClave">Palabra clave</label>
				    <div class="controls">
				      <input class="form-control" type="text" placeholder="escribe aqui la palabra clave" name="palabraClav" id="palabraClav">
					</div>
				</div>
				</div> 
			</div> <!--row -->
			</div> <!--container -->
			</br></br>

			 <div class="container">
			 <div class="row">
				<div class="col-xs-6 col-md-4">
				<div class="form-group">	
				<label for="areas">areas</label>
				 <div class="controls">										
				   <select  class="form-control" name="area">
				    <option value="todas">Todas</option>
						<?php $areas = getAreas();?>
						<?php foreach($areas as $row): ?>						
						  <option value="<?php echo $row->nombre?>"><?php echo $row->nombre?></option>	<!-- Se listan una por una-->
					     <?php endforeach; ?>
					</select>
				  </div>
			    </div> <!--form-group -->
			    </div> <!--col-xs-6 col-md-4 -->

		    <div class="col-xs-6 col-md-4">	
		    <div class="form-group">
				 <label for="fechaPublicacion">fecha de publicacion</label>
				 <div class="controls">				
				 <select  class="form-control" name="fechaPublicacion">
					<option value="todas">Cualquiera</option>
					<option value="ultimes">Ultimo mes</option>
					<option value="todas">Hace 6 meses</option>
					<option value="todas">Hace un año</option>
					<option value="todas">Hace 2 años</option>
					<option value="todas">Hace 5 años</option>
				 </select>
			     </div>
		    </div>	
		    </div>

			 <div class="col-xs-6 col-md-4">
			 <div class="form-group">		
				<label for="idioma">idioma</label>
				<div class="controls">	
			   <select class="form-control" name="idioma">
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
		</div>   <!-- Div row 2-->
		</div>  <!-- Div container 2-->
		</br></br>
		<div class="container">
		<div class="row">
			 <div class="col-xs-6 col-md-4">
			 <div class="form-group">	
			   <label for="formato">formato</label>
			   <div class="controls">
			   <select class="form-control" name="formato">
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
			</div>	<!-- Div col-xs-6 col-md-4-->			
			<div class="col-xs-6 col-md-4">	
			<div class="form-group">
			   <label for="configuracion">Configuracion</label>
			   <div class="controls">			
				 <select  class="form-control" name="configuracion">	<!-- busqueda titulo-->
					<option value="topalabtitulo">Todas las palabras</option>
					<option value="algunpalatitulo">Alguna de estas palabras</option>
					<option value="sinpalatitulo">Sin estas palabras</option>
				 </select>
		    	</div>
		    </div>	
		    </div>			
		</div>  <!-- Div row 3-->
		</div>  <!-- Div container 3-->
		</br></br>
		<div class="container">
		<div class="row">
		<div class="col-xs-12 col-md-12">	
				<center>
				  <button type="submit" class="btn btn-primary btn-lg" id="btnConsultarA"> Consultar</button>
				</center>
			
		</div> <!-- Div col-xs-12 col-md-12-->
		</div><!-- Div row-->
		</div> <!-- Div container 4-->
	    </form>  
	</div> <!-- tab-pane fade active in -->	  
	    </div> <!-- tab-pane fade -->
	 </div>  <!--tab-content -->
   </div> <!--starter-template-->
</div><!-- /.container -->
