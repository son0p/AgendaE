<div id="hoy_bar">
<?php 

if ($query->num_rows() > 0)
	{
	// Define a variable to send position to css code
	$f=0;	
	//Initiate loop to retrive result affected by incremental variable
		foreach($query->result() as $row):
		$f++;?>
			<div id="post<?php echo $f;?>">
			<img src="<?= $row->thumb?>" width="150" height="150" alt="" />
			<div class="hoy_info"><h2 class="title"><?php echo anchor ('home/mas/'.$row->proj_rev_id,  $row->titulo);?> </h2>
			<div class="date">
			<?= $row->agenda_fecha?> a las <?=$row->agenda_hora?> horass.<br />
			<?=$row->lugar?><br />
			<?=$row->agenda_costo?><br /> </div><div class="links"><?php echo anchor ('home/mas/'.$row->proj_rev_id, 'leer más');?></div>
			<div class="entry">	
			<a href="<?php echo $row->link;?>" />link del evento</a>
			</div></div></div>
		<?php endforeach;
		}
		else 
		{
			echo "<p>No tenemos eventos seleccionados :(</p>";
			}
		?>
	
		
	</div>
	




	
	






