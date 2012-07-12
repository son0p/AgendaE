<?php $this->load->view("inc/header.php")?>

 <div class=""> 
	<center>
		<a href="http://jardincosmico.net/proyectos/proyectos_form"/  >
		Insertar nuevo proyecto
		</a>
	</center>
</div>

    <?php if ($query->num_rows() > 0)?>
    
    <?php foreach($query->result() as $row):?>
      
 
      
  <p>
		<b>ID:</B><?=$row->proj_id?>___
		<b>paternidad:</B><?=$row->proj_parent?>__
		Nombre:  <b><font color="#610B5E"><?=$row->proj_nombre?></font></B>
		Prioridad: <b><font color="#610B5E"><?=$row->proj_prioridad?></font></B><br>
		Planteamiento:<b><?=$row->proj_planteamiento?></B>___
		Activo: <b><font color="#FF0000"><?=$row->activo?></font></b>
		
		<?=anchor('proyectos/edit_list/'.$row->proj_id, '...editar');?>
		<br><br>
  </p>
         


    <?php endforeach;?>     
        
     
    
    
    
    
    <hr>
    
   



<p><?=anchor('proyectos','Volver a los Proyectos');?></p>



<p><br />Page rendered in {elapsed_time} seconds</p>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
