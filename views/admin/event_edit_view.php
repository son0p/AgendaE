<?php $this->load->view("inc/header.php")?>



<?php $row = $query->row(); 
?>   
        
<?php echo form_open('backend/evento_update/'.$row->id); ?>
	<table>   
		<tr>
			<td> aaTitulo:<?php echo  form_input('name', $row->name) ?> 
			 Categoria: 
      	<?php
      			 $options= array (
					'1' => 'Música',
					'2' => 'Arte',
					'3' => 'Bar/Café',
					'4' => 'Académico',
					);
					echo form_dropdown('category', $options, $row->category );    
								
    			?>  				
		</tr>     
      <tr>
      	<td>Resumen del evento:<?php echo form_textarea('abstract', $row->abstract) ?>
      	 
      	
      	
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
      	<td>foto:<?php echo  form_input('img', $row->img) ?>
      </tr> 
     	<tr>
     		<td> Fecha Inicia: <?php echo  form_input('date', $row->date) ?>
			Fecha Finaliza <?php echo form_input('date_end', $row->date_end);?>  			</td>
     	</tr>
 		<tr>
 			<td> Agenda_hora:
 			 <?php echo  form_input('time', $row->time) ?>
 			  	
 			</td>
 		</tr>
<tr>
 			<td> Lugar del evento:
 			 <?php echo  form_input('place', $row->place) ?>
 			</td>
 		</tr>
} 		<tr>
 			<td> Costo del evento:
 			 <?php echo  form_input('price', $row->price) ?>
 			</td>
 		</tr>
		<tr>
 			<td> Link del evento:
 			 <?php echo  form_input('link', $row->link) ?>
 			  	
 			</td>
 		</tr>
		<tr>		
		
	          
      	
                  <tr>
       	<td> Memoria<SELECT NAME="memoria" MULTIPLE SIZE=2 value=<?=$row->memoria;?>>
            <OPTION VALUE="1">si
            <OPTION VALUE="0">no
               </SELECT>
       </tr> 
       <tr>
       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
  </form>

    
    
    
    









</body>
</html>

