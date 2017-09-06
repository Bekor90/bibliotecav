 <?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

 <?php if($result): ?>   <!-- validando consulta -->
	    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->
	    	<thead>
				<th class="info">Tipo material</th>
				<th class="info">Titulo principal</th>
				<th class="info">Titulo secundario</th>
				<th class="info">editorial</th>
				<th class="info">Fecha catalogación</th>
				<th class="info">Fecha creación</th>
				<th class="info">Idioma </th>
				<th class="info">Derechos autor </th>
				<th class="info">Formato </th>
			</thead>
			<tbody>
				<?php foreach($result as $row): ?>
				<tr>
					<td><?php echo $row->tipo_material ?></td>
					<td><?php echo $row->titulo_principal ?></td>
					<td><?php echo $row->titulo_secundario ?></td>
					<td><?php echo $row->editorial ?></td>
					<td><?php echo $row->fecha_catalogacion ?></td>
					<td><?php echo $row->fecha_creacion ?></td>
					<td><?php echo $row->idioma ?></td>
					<td><?php echo $row->derechos_autor ?></td>
					<td><?php echo $row->formato ?></td>
					<td><button type="submit" class="<?=$propiedad?>" id="btnEditar"><a href="<?=base_url();?><?=$funcion?>/<?=$row->id_documento?>"><span class="badge"><?=$nombreboton?></span></a></button></td>
				</tr>
				<?php endforeach;?>				
			</tbody>
		</table>
<?php endif; 
	echo $this->pagination->create_links();
?>  