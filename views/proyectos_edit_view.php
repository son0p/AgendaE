<?php $this->load->view("backend/inc/header.php")?>





 <?php if ($query->num_rows() > 0)?>
    
    <?php foreach($query->result() as $row):?>
      
  
      
        <p>
        <b>proyecto:</B><?=$row->proj_mast_name?>
        </p>>>>
        
        
         <?php //------------- define las variables
               
               $proj_mast_resu=$row->proj_mast_resu; ?>


    <?php endforeach;?>     
        
      <?=form_open('proyectos/proyectos_update/'.$row->proj_mast_id); ?>
              
            Nombre:<?= form_input('proj_mast_name', $row->proj_mast_name, 'id="Nombre"') ?>       
         
         <p>Planteamiento:<textarea name="proj_mast_resu" rows="8" size="20" style="width:50%" ><?php echo $proj_mast_resu;?>
                            </textarea></p>
            Ordenar:<?= form_input('ordenar', $row->ordenar, 'id="ordenar"') ?>

 Activo?<SELECT NAME="activo" MULTIPLE SIZE=2 value=<?=$row->activo;?>>

    			<OPTION VALUE="1">si
    			<OPTION VALUE="0">no
        </SELECT>
            
         <p><input type="submit" value="editar" /></p>
     </form>

    
    
    
    








<p><br />Flujo de datos procesado en  {elapsed_time} segundos</p>

</body>
</html>
