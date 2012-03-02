<?php $this->load->view("inc/header")?>
<div id="wrapper">
	
<table>
<tr>
<td>
<div class="content">
<h1>Tabla de contenidos</h1>
<br><br>

<ul>
<p>
<li><?php echo anchor('/categoria/musica', 'Música');?>
<li><?php echo anchor('/categoria/arte', 'Arte');?>
<li><?php echo anchor('/categoria/academico', 'Académico');?>
</ul></p>
</div>
</td>
<?php if ($query->num_rows() > 0):
foreach ($query->result() as $row):?>
  			
 <td><div class="sitio">

	<div class="sitio_img"><img src="<?= $row->img?>" width="150" height="200" alt="" /></div>
					
	<h1><?php echo $row->name; ?></h1>
	<div class="sitio_abstract"><?php echo $row->abstract; ?></div>
		
		<div class="sitio_mapa"> <?php echo $row->map; ?><br /></div>	      				 </td>

	      				
	      				</div>
	      				
	      			</div>
	      			
	      			
	      			<?php endforeach;
      			endif;?>
	      
	      
	      
	      
	      
	           </tr>
</table>
		
			
		
	
	
	<div style="clear: both;">&nbsp;</div>
</div><!-- end wraper -->



