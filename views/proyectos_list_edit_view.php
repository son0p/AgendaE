<html>
<head>
<title><?=$title?></title>

<style type='text/css' media='all'>@import url('public/css/jardin.css');</style>

</head>
<body>
<h1><?=$heading?></h1>

  <?php if ($query->num_rows() > 0)?>
    
    <?php foreach($query->result() as $row):?>
      
  
      
        <p><b>Nombre:</B><?=$row->proj_nombre?></p>>>>
        <p><b>Prioridad:</B><?=$row->proj_prioridad?></p>>>>
        <b>ID:</B><?=$row->proj_id?>___
        <b>paternidad:</B><?=$row->proj_parent?>___
        <b>proj_planteamiento:</B><?=$row->proj_planteamiento?>___
        <b>Activo:</B><?=$row->activo?>___<br><br>
        
         <?php //------------- define las variables
               $proj_nombre=$row->proj_nombre;
               $proj_id=$row->proj_id;
               $proj_parent=$row->proj_parent;
               $proj_planteamiento=$row->proj_planteamiento;
               $activo=$row->activo; ?>


    <?php endforeach;?>     
        
      <?=form_open('proyectos/update_list/'.$row->proj_id); ?>
              <?=form_hidden('proj_id', $this->uri->segment(3)); ?>
                  
                Nombre: <?= form_input('proj_nombre', $row->proj_nombre, 'id="proj_nombre"') ?>
                Prioridad: <?= form_input('proj_prioridad', $row->proj_prioridad, 'id="proj_prioridad"') ?>
                Activa? <SELECT NAME="activo" MULTIPLE SIZE=2>
                        <OPTION VALUE="1">si
                        <OPTION VALUE="0">no
                        </SELECT><BR>
                         Planteamiento<?= form_textarea('proj_planteamiento', $row->proj_planteamiento, 'id="proj_planteamiento"') ?>
                
    
    <p><input type="submit" value="editar" /></p>
  </form>

    
    
    
    
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
