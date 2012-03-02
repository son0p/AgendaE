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
	      			
	 <td><div class="event">

	<div class="event_img"><img src="<?= $row->img?>" width="150" height="200" alt="" /></div>
	<div class="event_place"> <img src="<?php echo base_url()?>./images/icons/place.png" height="30" width="30" /> <?php echo $row->place; ?></div>
	
	<h1><?php echo $row->name; ?></h1>
	<div class="event_abstract"><?php echo $row->abstract; ?></div>
	<div class="event_price"></div>
	<div class="event_date"><?php $dia = substr($row->date, -2, 2);echo $dia; ?><br />

<?php
$date = date("Y-m-d");
$hoy = date_create($date);
$dia = date_create($row->date);
$i = date_diff($hoy, $dia);
?>
</div>
	<div class="event_time"> <img src="<?php echo base_url()?>./images/icons/clocks.gif" height="30" width="30" /> 
	<?php echo $row->time; ?><br />
			
	<strong> <img src="<?php echo base_url()?>./images/icons/dollar.png" height="25" width="25" />  <?php echo $row->price; ?><br /></strong>
	      				 </td>

	      				
	      				</div>
	      				
	      			</div>
	      			
	      			
	      			<?php endforeach;
      			endif;?>
	      
	      
	      
	      
	      
	           </tr>
</table>
		
			
		
	
	
	<div style="clear: both;">&nbsp;</div>
</div><!-- end wraper -->



