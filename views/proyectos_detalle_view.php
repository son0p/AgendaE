<?php $this->load->view("inc/header.php")?>

<?php if ($query->num_rows() > 0):?>
    
    <?php foreach($query->result() as $row):?>
   <table> 
     <tr>
        <td><h3><?=$row->proj_nombre?></h3><?=$row->proj_planteamiento?>  <?=$row->proj_prioridad?></td>
        
       
         
        <td><?=anchor('proyectos/revisiones_all/'.$row->proj_id, 'Revisiones');?><br>
        	 <?=anchor('proyectos/investigacion/'.$row->proj_id, 'Investigacion');?><br>
        	 <?=anchor('proyectos/ti/'.$row->proj_id, 'Tormenta de ideas');?><br></td>
		    <td> <?=anchor('proyectos/objetivos/'.$row->proj_id, 'objetivos');?><br>
		    <td> <?=anchor('proyectos/uso_proyecto/'.$row->proj_id, 'tiempo usado...');?><br>
            <?=anchor('proyectos/detalles_edit/'.$row->proj_id, 'editar...');?>
            </td>
      <tr>
      <tr>
    </table>
    
    <?php endforeach;?>

<?php endif; ?>


<hr>

	<h3>Proyectos Detalles / subproyectos</h3>
		<?=form_open('proyectos/detalles_insert'); ?>
			<p>Nombre del proyecto  <input type="text" name="proj_nombre" /></p>
			<p>Paternidad  <input type="text" name="proj_parent" value=<?= $this->uri->segment(3);?> /></p>
			Activo?<SELECT NAME="activo" MULTIPLE SIZE=2>
			<OPTION VALUE="1">si
			<OPTION VALUE="0">no
			</SELECT>
			<p>Prioridad <input type="text" name="proj_prioridad" /></p>

			<p><input type="submit" value="enviar" /></p>
		</form>
<hr>



<p><?=anchor('proyectos','Volver a los Proyectos');?></p>


<?//=form_open('proyectos/detalles_insert'); ?>

<?//=form_hidden('proj_parent', $this->uri->segment(3)); ?>


<!--<p>planteamiento<textarea name="proj_planteamiento" rows="20"></textarea></p>
<p>nombre<input type="text" name="proj_nombre" /></p>
<p><input type="submit" value="enviar" /></p>

</form>
!-->
<p><br />Page rendered in {elapsed_time} seconds</p>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
