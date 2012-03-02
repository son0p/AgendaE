<?php $this->load->view("inc/header")?>


	<div id="page">
		
	<div id="backend">		
	

		<?php if ($query->num_rows() > 0)?>
			<?php foreach ($query->result() as $row): ?>
			<table cellpadding="0" cellspacing="0" border="1">


			<tr>
			 <td><img src="<?= $row->img?>" width="150" height="200" alt="" /></td>
				<td width="200"><div id="backend_title"><?php echo $row->title, "<br>", $row->post; ?></div></td>
			
				<td><div class="notable"><?php echo anchor('/events/edit/'.$row->id,'editar'); ?></div><br /><br />

			 <div class="delete"><?php echo anchor('/events/delete/'.$row->id,'BORRAR');?></div></td>
	<td>
	<?php
		$visible = $row->visible;
		if ($visible == 1){
			echo "<b>ACTIVO!!!</b>";
		}
		else{
			echo "_________";

		}
	?>
	</td>


</tr>
			</table>

		<?php endforeach; ?>

			
		
	</div>
</div>
