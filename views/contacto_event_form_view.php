<?php $this->load->view("inc/header.php")?>
<div id="page">

<?=form_open('contactos/insert/'); ?>
	<?php form_hidden('visible', '0'); ?>  
<div id="form">	<table> 
			<tr><p>Si solo tienes el<b> Link de el evento </b>que quieres sugerirnos, pégalo  aquí y apretas en el botón [Enviar] de la parte de abajo:</p>
				
		<?php	$data = array(
		      'name'        => 'link',
		      'id'          => 'link',
		      'value'       => '',
		      'maxlength'   => '400',
		      'size'        => '70',
		      'style'       => '',
        		    );

			echo form_input($data);
			 ?><img src="<?php echo base_url()?>./images/icons/hyperlink.gif" height="30" width="30" />
			<br><br>
			<hr>
			<br>
			<?=form_open('contactos/insert/'); ?>

			<p> Si nos quiere sugerir  esta información adicional, adelante:

			<td><b> Nombre del evento:</b><?php echo  form_input('name') ?> 
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
	
      	<td><div id="descriptionTextBoxForm"><b>Resumen del evento:</b></div><div id="textBoxForm">
<?php
		  $data = array(
		 'name'        => 'abstract',
		 'id'          => 'abstract',
		 'value'       => '',
		 'rows'   => '10',
		 'cols'        => '30',
		 'style'       => 'width:50%',
		    );

echo form_textarea($data);
 ?>
</div>
<tr>
<td><div id="descriptionTextBoxForm"><b>Contexto</b>(links adicionales, información simpática del evento, daticos, razones por las que es importante ir, comentarios, saludos, insultos,  etc):</div><div id="textBoxForm">
<?php
  $data = array(
		'name'        => 'context',
		'id'          => 'context',
		'value'       => '',
		'rows'   => '5',
		'cols'        => '40',
		'style'       => 'width:50%',
		);
echo form_textarea($data);
 ?>
</div>
     </tr>       
      <tr>
      	<td><b> Link de la imagen del evento:</b><?php echo  form_input('img') ?> Si tienes que subir una foto desde tu computadora puedes subirla a <a href="http://agendaemergente.com/upload" />
http://agendaemergente.com/upload </a>, luego de subirla puedes pegar aquí el hotlink (la foto se verà de 150px de ancho por 200px de alto)
      </tr> 
     	<tr>
     		<td><b> Fecha en que  inicia :</b><?php echo  form_input('date', date('Y-m-d'));  ?>	
			Fecha en que finaliza: <?php echo form_input('date_end'); ?><br> Éstas fechas deben ser de la forma Año - mes - dia ej: 2012-01-31 			</td>
     	</tr>
 		<tr>
 			<td><b>Hora:</b>
 			 <?php echo  form_input('time', '18:00') ?><img src="<?php echo base_url()?>./images/icons/clocks.gif" height="30" width="30" />
 			  	
 			</td>
 		</tr>
		<tr>
			<tr>
			<td><b> Lugar del evento:</b>
 			 <?php echo  form_input('place') ?> <img src="<?php echo base_url()?>./images/icons/place.png" height="30" width="30" />
 			</td>

			<td><b> Geodatos(mapa):</b>
 			 <?php echo  form_input('geodata') ?> 
 			</td>
 		</tr>
		<tr>
 			<td><b> Costo del evento:</b>
 			 <?php echo  form_input('price') ?><img src="<?php echo base_url()?>./images/icons/dollar.png" height="25" width="25" />
 			</td>
 		</tr>
		<tr>
 		 		</tr>
	
       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
     </form>
</div>
			
			<div style="clear: both;">&nbsp;</div>
		




</div>
	
</div>		
		











    
    
    
    




