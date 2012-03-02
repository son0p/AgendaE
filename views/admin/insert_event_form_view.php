<?php $this->load->view("inc/header.php")?>
<div id="page">
<div id="backend">
<?=form_open('backend/event_insert/'); ?>
	<table>   
		<tr>
			<td> Titulo:<?php echo  form_input('name') ?> 
			 Categoria: 
      	<?php
      			 $options= array (
					'1' => 'Música',
					'2' => 'Arte',
					'3' => 'Bar/Café',
					'4' => 'Académico',
					);
					echo form_dropdown('category', $options, '1' );    
								
    			?>  				
		</tr>     
      <tr>
      	<td>Resumen del evento:<?php echo form_textarea('abstract') ?>
      	 
      	
      	
      </tr>       
		<tr>
			<td>Visible en la agenda? 
				<?php $options= array (
					'1' => 'Si',
					'2' => 'No',
					);
					echo form_dropdown('visible', $options, '1');    				
    			?>  				
    		</td>
    	</tr>          
      <tr>
      	<td>foto:<?php echo  form_input('img') ?> Si tienes que sibir una foto desde tu computadora puedes subirla a <a href="http://inky.ws/" />http://inky.ws/ </a> 
      </tr> 
     	<tr>
     		<td> Fecha Inicia :<?php echo  form_input('date', date('Y-m-d'));  ?>	
			Fecha Finaliza: <?php echo form_input('date_end'); ?> estas fechas deben ser de la forma Año - mes - dia ej: 2012-01-31 			</td>
     	</tr>
 		<tr>
 			<td> Agenda_hora:
 			 <?php echo  form_input('time', '18:00') ?>
 			  	
 			</td>
 		</tr>
		<tr>
		<tr>
 			<td> Lugar del evento:
 			 <?php echo  form_input('place') ?>
 			</td>
 		</tr>
		<tr>
 			<td> Costo del evento:
 			 <?php echo  form_input('price') ?>
 			</td>
 		</tr>
		<tr>
 			<td> Link del evento:
 			 <?php echo  form_input('link') ?>
 			  	
 			</td>
 		</tr>
	
       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
     </form>
			
			<div style="clear: both;">&nbsp;</div>
		




</div>
	
</div>		
		











    
    
    
    




