<?php $this->load->view("backend/inc/header.php")?>

<div class="code"><?=anchor('backend/proyectos_mast_form/', '[insertar]');?></div>

<?php foreach($query->result() as $row):?>

<table>
<tr>
<td><h3><?=$row->proj_mast_name?></h3>  <?=$row->ordenar?></td>
<td><?=$row->proj_mast_resu?></td>
<td><?=anchor('proyectos/fachada/'.$row->proj_mast_id, 'Fachada');?></td>
<td><p><?=anchor('proyectos/detalles/'.$row->proj_mast_id, 'Detalles');?></p></td>
<td><p><?=anchor('proyectos/proyectos_edit/'.$row->proj_mast_id, '[editar]');?></p></td>

<tr>
</table>




<?php endforeach;?>



<h1><?=anchor('proyectos_off/', 'Proyectos inactivos');?></h1></p>


<hr>


<? echo 'Resultados: ' . $query->num_rows();?>
 

<br><br>
    <?php
    $target = mktime(0, 0, 0, 12, 6, 2010) ;
    $today = time () ;
    $difference =($target-$today) ;
    $days =(int) ($difference/86400) ;
    print "Our event will occur in $days days";
    ?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
