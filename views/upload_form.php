
<?php $this->load->view("inc/header")?>
<div id="sugiere">
 <p>Nota:Solo puedes subir imágenes tipo gif, jpg, png de máximo 400kb</p>
<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />
  
<br /><br />

<input type="submit" value="upload" />

</form>
</div>
