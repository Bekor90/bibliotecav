<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

 <?php if($result): ?>   <!-- validando consulta -->
 	<div class="container">
       <div class="row">
	    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->
	    	<thead>
				<th class="info">Nombre Palabra</th>
			</thead>
			<tbody>
				<?php foreach($result as $row): ?>
				<tr>
					<td><?php echo $row->nombre ?></td>
					<td><button type="submit" class="<?=$propiedad?>" id="btnEditar"><a href="<?=base_url();?><?=$funcion?>/<?=$row->id_palabra?>"><span class="glyphicon glyphicon-pencil"><?=$nombreboton?></span></a></button></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
        </div>
    </div>
<?php endif; 
	echo $this->pagination->create_links();
?>