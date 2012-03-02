<?php $this->load->view("inc/header.php")?>



<?php $row = $query->row(); 
?>   
   <tr>
      	<td>Título:<?php echo  form_input('title', $row->title) ?>
      </tr> 
       
<?php echo form_open('editoriales/update/'.$row->id); ?>
	<table>   
		<tr>
			<td>Visible ? 
				<?php $options= array (
					'1' => 'Si',
					'0' => 'No',
					);
					echo form_dropdown('visible', $options );    				
    			?>  				
    		</td>
		
		</tr>     
      <tr>
      	<td>Editorial:<?php echo form_textarea('post', $row->post) ?>
      	 
      	
      	
      </tr>       
	   
      <tr>
      	<td>foto:<?php echo  form_input('img', $row->img) ?>
      </tr> 
            <tr>
       	<td><p><input type="submit" value="enviar" /></p>
       </tr>     
	 </table>
  </form>

    
    
    
    









</body>
</html>

