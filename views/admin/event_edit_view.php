<?php $this->load->view("inc/header.php")?>



<?php $row = $query->row(); 
?>   
        
<?php echo form_open('backend/evento_update/'.$row->id); ?>
	<table>
	  	<tr>
 			<td>
			  <b> Link del evento:  </b>
 			 <?php
			    	$data = array(
		      'name'        => 'link',
		      'id'          => 'link',
		      'value'       => $row->link,
		      'rows'   => '1',
		      'cols'        => '60',
		      'style'       => 'width:70%',
		    );

			 echo form_textarea($data);


  ?><img src="<?php echo base_url()?>./images/icons/hyperlink.gif" height="30" width="30" />

 			</td>
 		</tr>
		<tr>
			<td><b> Titulo:</b><?php echo  form_input('name', $row->name) ?> 
		<b>	 Categoria: </b>
      	<?php
      			 $options= array (
					'1' => 'Música',
					'3' => 'Arte',
					'2' => 'Bar/Café',
					'4' => 'Académico',
					);
					echo form_dropdown('category', $options, $row->category );    
								
    			?> 
	<b>	Visible en la agenda? </b>
				<?php $options= array (
					'1' => 'Si',
					'2' => 'No',
					);
					echo form_dropdown('visible', $options, '1');    				
    			?>  				
    		</td>
 				
		</tr>     
      <tr>

      	<td><div id="descriptionTextBoxForm"><b>Resumen del evento:</b></div><div id="textBoxForm"><?php

	$data = array(
		      'name'        => 'abstract',
		      'id'          => 'abstract',
		      'value'       => $row->abstract,
		      'rows'   => '10',
		      'cols'        => '30',
		      'style'       => 'width:50%',
		    );

echo form_textarea($data);



 ?></div>
<tr>
 	<td><div id="descriptionTextBoxForm"><b>Contexto  del evento:</b></div><div id="textBoxForm"><?php

	$data = array(
		      'name'        => 'context',
		      'id'          => 'context',
		      'value'       => $row->context,
		      'rows'   => '10',
		      'cols'        => '30',
		      'style'       => 'width:80%',
		    );

echo form_textarea($data);
 ?></div>



     
      	 
      	
      	
      </tr>       
		<tr>
		
    	</tr>          
      <tr>
      	<td><b>foto:<?php echo  form_input('img', $row->img) ?>
      </tr> 
     	<tr>
     		<td><b> Fecha Inicia:</b> <?php echo  form_input('date', $row->date) ?>
			Fecha Finaliza <?php echo form_input('date_end', $row->date_end);?>  			</td>
     	</tr>
 		<tr>
 			<td><b> Agenda_hora:</b>
 			 <?php echo  form_input('time', $row->time) ?><img src="<?php echo base_url()?>./images/icons/clocks.gif" height="30" width="30" />
 			  	
 			</td>
 		</tr>
<tr>
 			<td><b> Lugar del evento:</b>
 			 <?php echo  form_input('place', $row->place) ?><img src="<?php echo base_url()?>./images/icons/place.png" height="30" width="30" />
 			</td>
 		</tr>
 		<tr>
 			<td><b> Costo del evento:</b>
 			 <?php echo  form_input('price', $row->price) ?><img src="<?php echo base_url()?>./images/icons/dollar.png" height="25" width="25" />
 			</td>
 		</tr>
	
		<tr>		
		
	          
      	
                 
       <tr>
       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
  </form>

    
    
    
    









</body>
</html>

