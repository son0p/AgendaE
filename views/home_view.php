<?php $this->load->view("inc/header")?>

<div id="wrapper">
	
<table>
<tr>
<td><span title="Foto Juno"> <div id="cover"> <!-- --></div></span>	</td>
<td>
<div id="editorial"> 
	<div id="editorial_text"> 
	<h1>Editorial</h1>
	<?php $row = $editorial->row(); ?>
	<img src="<?php echo $row->img ?>" width="230" height="230" alt=".." title="..." ><div id="editorial_image_credit"><?php echo $row->image_credit ?></div>
	<h2><?php echo $row->title; ?></h2><br />
	 <br />
         <p><?php echo $row->post; ?></p>
       
	</div>
	
</div>
</td>

<td>
<div class="content">
<h1>Tabla de contenidos</h1>
<br><br>
<ul>
	<li><?php echo anchor('categoria/hoy', 'Hoy!');?></li>

<li><?php echo anchor('/categoria/musica', 'Música');?>
<li><?php echo anchor('/categoria/arte', 'Arte');?>
<li><?php echo anchor('/categoria/academico', 'Académico');?>
<li><?php echo anchor('/categoria/barcafe', 'Bar/Café');?>
</ul>
<div id="sugiere"><?php echo anchor('/contactos/form/', 'Sugiere un evento');?></a> 
</div><div id="facebook">
 <iframe src="http://www.facebook.com/plugins/like.php?href=www.agendaemergente.com"
        scrolling="no" frameborder="0"
        style="border:none; width:200px; height:80px"></iframe></div>
</td>
<?php if ($query->num_rows() > 0):
	foreach ($query->result() as $row):?>
	 <td><div class="event">
		<div class="event_img"><img src="<?= $row->img?>" width="150" height="200" alt="" /></div>
		<div class="event_place"> <img src="<?php echo base_url()?>./images/icons/place.png" height="30" width="30" /> <?php echo $row->place; ?></div>
		<h1><?php echo $row->name; ?></h1>
		<div class="event_abstract"><?php echo $row->abstract; ?></div>
		<div class="event_price"></div>
		<div class="event_date"><?php $dia = substr($row->date, -2, 2);echo $dia; ?>
		</div>
		<div class="event_date_name">
		<?php
		$dias = array ("Domingo","Lunes", "Martes", "Miércoles","Jueves", "Viernes", "Sábado" ); 
	/* creamos la variable dias y le asignamos la matriz o array con los dias de la semana*/
		$meses = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$day = date('w', strtotime($row->date));
		$month = date('n', strtotime($row->date));
		echo $dias[$day['d']];
		echo " ";?></div>
		<div class="event_date_name_month">
		<?php	echo $meses[$month['m']]; ?>
		</div>

<br />

	<?php
	$date = date("Y-m-d");
	$hoy = date_create($date);
	$dia = date_create($row->date);
	$i = date_diff($hoy, $dia);
	?>
	<div class="event_time"><img src="<?php echo base_url()?>./images/icons/clocks.gif" height="30" width="30" /> <?php echo $row->time; ?><br />
	<strong> <img src="<?php echo base_url()?>./images/icons/dollar.png" height="25" width="25" /> <?php echo $row->price; ?><br /></strong>	</div>
	
	<div class="event_link"><?php
	  $link = ' <img src="'.base_url().'/images/icons/hyperlink.gif" height="35" width="35" />';
	  echo anchor($row->link, $link);?></div>
	<div class="event_footer"><!-- --></div>
	 </td>
	</div>
  	<?php endforeach;
	endif;?>
<td>
<div class="ultimo">
<!-- -->
</div>
</td>	      
	      
	      
	      
	      
	   </tr>
</table>
		
			
		
	
	
	<div style="clear: both;">&nbsp;</div>
</div><!-- end wraper -->



