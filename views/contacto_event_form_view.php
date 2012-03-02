<?php $this->load->view("inc/header.php")?>
<div id="page">
<div id="backend">
<?=form_open('contactos/insert/'); ?>
	<table>   
		<tr>
			<td> Nombre del evento:<?php echo  form_input('name') ?> 
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
					<?php form_hidden('visible', '0'); ?>  				
    	            
      <tr>
      	<td> link de la imagen del evento:<?php echo  form_input('img') ?> Si tienes que subir una foto desde tu computadora puedes subirla a <a href="http://inky.ws/" />http://inky.ws/ </a>, luego de subirla puedes pegar aquí el hotlink (la foto se verà de 150px de ancho por 200px de alto)
      </tr> 
     	<tr>
     		<td> Fecha Inicia :<?php echo  form_input('date', date('Y-m-d'));  ?>	
			Fecha Finaliza: <?php echo form_input('date_end'); ?> estas fechas deben ser de la forma Año - mes - dia ej: 2012-01-31 			</td>
     	</tr>
 		<tr>
 			<td>Hora:
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
		











    
    
    
    




