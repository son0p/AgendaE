<?php 


$this->load->view("inc/header")?>

<div id="splash"><img src="images/img02.jpg" width="960" height="301" alt="" /></div>
	<div id="page">
		<div id="content">
			
			<div class="post">
				<?php 
				foreach($cont->result() as $row):?>
				<h2 class="title"><?php echo $row->titulo;?></h2>
				 <h3>Por:<?php echo $row->autor;?></h3>
				 <p><?php echo $row->contenido;?></p>
				 <?php endforeach;?>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		</div>
		</div>
		





	
	


