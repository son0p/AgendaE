


<h2>Revisiones que contienen el tag: <?php $row = $tag->row();
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
		echo "no hay revisiones relacionados";
	}

?>
		