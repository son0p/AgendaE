<?php 


$this->load->view("inc/header")?>




<div id="page">
		<div id="content">
			
			<div class="post">
				<br><br><br><br><br><br>
 					hoy es: <?php echo date('l jS \of F Y h:i:s A') ?>
 					y el día es <?php echo $dia; ?>
 
 					el valor de fecha es <?php echo $fecha; ?>
 					<br> 
 			 hoy :
 			 
 			 
 			
				
				<ul>
<li>dentro de 7 días será: <?php echo $semana;?> </li>				
				
				</ul>

				</ul>
			
			<div style="clear: both;">&nbsp;</div>
		</div>





	</div>
</div>		





<?php $this->load->view("inc/footer")?>



