<ul>
<li><h2>Próximos eventos:</h2></li>
</ul>
<?php 

if ($future->num_rows() > 0)
	{
		foreach($future->result() as $row):
		?>
			
			<img class="floatleft" src="<?= $row->thumb?>" width="100" height="100" alt="" />
			<div class="sidebar_text">
				<?php echo anchor ('home/mas/'.$row->proj_rev_id,  $row->titulo);?>
			 	<div class="dia_sidebar">
			 	<?php $dia = substr($row->agenda_fecha, -2, 2);
			 	echo $dia?>
			 	</div> a las <?=$row->agenda_hora?> horas.<br />
				
				<?php echo $row->agenda_costo?></div>
				<br /><br />
				<div class="break"/></div><br />
		<?php endforeach;
		}
		else 
		{
			echo "<p>No tenemos eventos seleccionados :(</p>";
			}
		?>
		
		

	




	
	






