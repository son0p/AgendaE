<?php $this->load->view("inc/header")?>


	<div id="page">
		
	<div id="backend">		
	

			<p><div id="notable"><?php echo anchor('/backend/insert_event_form', 'insertar nuevo evento'); ?></div></p>
			<?php if ($query->num_rows() > 0)?>
			<?php foreach ($query->result() as $row): ?>
			<table cellpadding="0" cellspacing="0" border="1">


			<tr>
			 <td><img src="<?= $row->img?>" width="150" height="200" alt="" /></td>
				<td width="200"><div id="backend_title"><?php echo $row->name, "<br>", $row->date; ?></div></td>
			
				<td><div id="edit"><?php echo anchor('/backend/evento_edit/'.$row->id,'editar'); ?></div><br /><br />
			 <div id="delete"><?php echo anchor('/backend/event_delete/'.$row->id,'borrar');?></div></td></tr>
			</table>

		<?php endforeach; ?>

			
		
	</div>
</div>
