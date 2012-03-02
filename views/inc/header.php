<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">

<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29408428-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta name="google-site-verification" content="bNewhnpxhD8g5jwjhX2VmBAYyWSzUkCeDtwcTw0LVTM" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<META name="description" content="Agenda de eventos medellin" />
<META name="keywords" content="agenda, medellin, poblado, envigado, bello, actividades, concierto, teatro, arte, exposiciones, cafe, conferencia, literatura, laureles, carlos e, centro, que hacer, noche, tarde, tardear, desparche, parche, parque del poblado, parque lleras, musica, underground, estetica, pintor, musico, cultura, cultura libre, ciencia" /> 
<meta http-equiv="content-language" content="es" />


<title>Agenda Emergente</title>
<style type='text/css' media='all'>@import url('<?php echo base_url()."css/smallwindow/default.css"; ?>');</style>

<div id="header" >
		<div id="logo">
	<h1><a href="<?php echo base_url(); ?>">Agenda Emergente  </a></h1>
	
	
</div>
			
				
				
			<div id="menu">
		<ul id="main">
						<!--	<li><?php //echo form_open('/home/pre_search');?>
				<input type="text" name="keyword" /> 
				<input type="submit" id="mysubmit" value="Buscar" />
				 </form></li> -->
			
				
	<?php if ($this->ion_auth->logged_in()) { ?>	
	<li><?php echo anchor('/backend', 'administrar');?></li>
	<li><?php echo anchor('/editoriales', 'Editoriales'); ?></li>
	<li><?php echo anchor('auth/logout', 'logout'); ?></li>

	<?php }
	else
	      { ?>
		<li><?php echo anchor('auth/login', 'login');?></li>

	<?php
		}   
		?>	:
		
	
		</ul>
		
		
				
			
				
		</div><!-- close div menu -->		
				
		
   </div><!-- close header div -->
   

