<?php $this->load->view("inc/header.php")?>




<?php foreach ($query->result() as $row):?>
 
  <table>
   <tr>
   <h4><td><?=$row->proj_nombre?></h4></td>
   </table>

<?php endforeach;?> 


   <h1>Editar Detalles / subproyectos</h1>
      <?=form_open('proyectos/detalles_update/'.$row->proj_id); ?>
  
     Nombre:<?= form_input('proj_nombre', $row->proj_nombre, 'id="proj_nombre"') ?>

    <p>Planteamiento:  <TEXTAREA name="proj_planteamiento" COLS=40 ROWS=6 value=<?=$row->proj_planteamiento;?>></TEXTAREA></p>
    <p>Paternidad  <?= form_input('proj_parent', $row->proj_parent, 'id="proj_parent"') ?>
       Prioridad:<input type="text" NAME="proj_prioridad" value=<?=$row->proj_prioridad;?>>
      Activo?<SELECT NAME="activo" MULTIPLE SIZE=2 value=<?=$row->activo;?>>

    			<OPTION VALUE="1">si
    			<OPTION VALUE="0">no
        </SELECT>

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
