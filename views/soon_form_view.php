<?php $this->load->view("inc/header.php")?>
    
    <?php foreach($query->result() as $row):?>
     
    <?php endforeach;?>


 <p>Si desea puede elaborar el texto en esta pagina que ayuda a preformatear el codigo HTML <a href="http://daringfireball.net/projects/markdown/dingus"/>http://daringfireball.net/projects/markdown/dingus</a></p>

 
  <?=form_open('welcome/insert_mail'); ?>
    <p>Paternidad  <input type="text" name="paternidad"  value="<?= $row->proj_rev_id?>"  /> ( no cambiar este valor )</p>
    <p>Titulo: <input type="text" name="titulo"  /></p> 
    <p><textarea name="revision" rows="10" size="50" style="width:70%"></textarea></p>
    <p>Fecha: <input type="text" name="rev_date" value=<?php echo date('Y-m-d');?> /></p>
    <p>Version: <input type="text" name="version" />( si no esta seguro .. dejelo en blanco )</p>

 Visible?<SELECT NAME="visible" MULTIPLE SIZE=2 value=<?=$row->visible;?>>

    <OPTION VALUE="1">si
    <OPTION VALUE="0">no
    
    </SELECT>( si quiere que sea publico diga si )
    <p><input type="submit" value="enviar" /></p>
  </form>
<hr>



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
