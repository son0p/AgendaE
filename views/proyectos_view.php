<?php $this->load->view("inc/header.php")?>
  
   



<?php foreach($query->result() as $row):?>

<table>
<tr>
<td width="250"><h3><?=$row->proj_mast_name?></h3></td>
<td width="300"><?=$row->proj_mast_resu?> </td>  
<td><?=anchor('proyectos/fachada/'.$row->proj_mast_id, 'mas...');?></td>
 
</tr>
</table>




<?php endforeach;?>


<h1><?=anchor('proyectos_off/', 'Proyectos inactivos');?></h1></p>


<hr>



 

<br><br>
    <?php
    $target = mktime(0, 0, 0, 12, 5, 2009) ;
    $today = time () ;
    $difference =($target-$today) ;
    $days =(int) ($difference/86400) ;
    print "!! en  $days days";
    ?>
<p>
  


</p>
<p><br />Flujo de datos procesado en  {elapsed_time} segundos</p>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
