

<?php 


$this->load->view("inc/header")?>

<div id="splash"><img src="images/img02.jpg" width="960" height="301" alt="" /></div>
	<div id="page">
		<div id="content">
			
			<div class="post">
				


<h2> <?php $row = $tag->row();
		echo $row->tag; ?> </h2>

<?php

if ($revisiones->num_rows() >0)
	{
		foreach ($revisiones ->result() as $row):
			echo $row->proj_rev_id; ?>
			 es 
			<?php
			echo $row->titulo;?>
			<br />
 		<?php endforeach; 
 		
 		 		
	}

else 
	{ 
		echo "no hay resultados";
	}

?>
			
			<div style="clear: both;">&nbsp;</div>
		</div>





	</div>
</div>		
		


		