<?php $this->load->view("inc/header.php")?>
<div id="page">
<div id="backend">
<?=form_open('editoriales/insert/'); ?>
	<table> 

	<tr>
			<td>Visible ? 
				<?php $options= array (
					'1' => 'Si',
					'0' => 'No',
					);
					echo form_dropdown('visible', $options, '0');    				
    			?>  				
    		</td>

  
		<tr>
			<td> Titulo:<?php echo  form_input('title') ?> 
					
		</tr>     
      <tr>
      	<td>Editorial:<?php echo form_textarea('post') ?>
      	 
      	
      	
      </tr>       
	   
      <tr>
      	<td>foto:<?php echo  form_input('img') ?><br> Si tienes que subir una foto desde tu computadora puedes subirla a <a href="http://agendaemergente.com/upload" />
http://agendaemergente.com/upload </a>, luego de subirla puedes pegar aquí el hotlink<br><br>
      </tr> 
<td>Crédito imagen:<?php echo form_input('image_credit')?> </td>
     	<tr>
     	       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
     </form>
			
			<div style="clear: both;">&nbsp;</div>
		




</div>
	
</div>		
		











    
    
    
    




