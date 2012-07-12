<?php $this->load->view("inc/header")?>
		







<div id="wrapper">
	
<table>
<tr>
<td> <div id="cover"><!--  --></div>	</td>
<td>
<div id="editorial"> 
	<div id="editorial_text"> 
	<h1>Editorial</h1>
	<?php $row = $editorial->row(); ?>
	<img src="<?php echo $row->img ?>" width="150" height="200" />
	<h2><?php echo $row->title; ?></h2><br />
	 <br />
	<?php echo $row->post; ?>
	</div>
</div>
</td>
<td>
<div class="content">
<h1>Tabla de contenidos</h1>
<br><br>
<ul>

<li><?php echo anchor('/categoria/musica', 'Música');?>
<li><?php echo anchor('/categoria/arte', 'Arte');?>
<li><?php echo anchor('/categoria/academico', 'Académico');?>
</ul>
</div>
</td>
<?php if ($query->num_rows() > 0):
	foreach ($query->result() as $row):?>
	 <td><div class="event">
		<div class="event_img"><img src="<?= $row->img?>" width="150" height="200" alt="" /></div>
		<div class="event_place">Donde? <?php echo $row->place; ?></div>
		<h1><?php echo $row->name; ?></h1>
		<div class="event_abstract"><?php echo $row->abstract; ?></div>
		<div class="event_price"></div>
		<div class="event_date"><?php $dia = substr($row->date, -2, 2);echo $dia; ?>
		</div>
		<div class="event_date_name">
		<?php
		$dias = array ("Domingo","Lunes", "Martes", "Miercoles","Jueves", "Viernes", "Sabado" ); 
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
	<div class="event_time">Cuando? <?php echo $row->time; ?><br />
	<strong>Valor? <?php echo $row->price; ?><br /></strong>	</div>
	<div class="event_link"><?php echo anchor($row->link, '[Enlace]');?></div>
	<div class="event_footer"><!-- --></div>
	 </td>
	</div>
  	<?php endforeach;
	endif;?>
	      
	      
	      
	      
	      
	           </tr>
</table>
		
			
		
	
	
	<div style="clear: both;">&nbsp;</div>
</div><!-- end wraper -->



