<html>
<head>
<title><?=$title?></title>

<style type="text/css">

body { 
 background-color: #fff; 
 margin: 40px; 
 font-family:  Verdana, Lucida Grande, Sans-serif;
 font-size: 10px;
 color: #4F5155;
}

a {
 color: #330033;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 10px;
 font-weight: normal;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

table {
	font-size:90%;
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	line-height:1.2em;
	color: #333333;
	background-color:#fff;
	border-collapse:collapse;
	text-align:left;
	letter-spacing:.1em;
}

caption {
	padding-bottom:1em;
	text-align: center;
	font-size: 1.4em;
	font-weight: normal;
	text-transform: uppercase;
	letter-spacing:.6em;
	color: #333;
	background: transparent;
}
  
thead th, tfoot th, tfoot td {
	font-family: arial, verdana, sans-serif;
	border-right: 1px solid #fff;
	padding-left:5px;
	font-variant:small-caps;
	letter-spacing:0.1em;
	color: #fff;
	background: #009;
}
  
tfoot th, tfoot td {
	border-top: 2pt double #009;
}

td, th {
	padding:4px;
}

tbody tr th, tbody tr td {
	border-bottom: 1px dotted #009;
}

tbody tr:hover td, tbody tr:hover th {
	border-bottom: 1px solid #330033;
}

table a[title^="Download"] { 
	font-style:italic;
}

tbody td a, tbody th a {
	background: transparent;
	color: #009;
	text-decoration: none;
	border:none;
}

tbody td a:hover, tbody th a:hover {
	background: transparent;
	color: #930;
}

.odd {
	background: #e3e3f4;
}

tbody tr:hover {
	color: #660066;
	background: #c6c6e8;
}

tbody tr th:hover {
	background:#fff;
}

table a:visited {
	text-decoration: line-through;
	color:#990099;
}
code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 10px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>

</head>
<body>
<h1><?=$heading?></h1>

<?php if ($query->num_rows() > 0):?>
    
    <?php foreach($query->result() as $row):?>
   <table> 
     <tr>
        <td><h3><?=$row->proj_nombre?></h3></td>
        <td><p><?=$row->proj_planteamiento?></p></td>
        <td><?=$row->proj_extrac_valores?></td>
        <td><?=$row->proj_estructura?></td>
        <td><p><?=anchor('proyectos/revisiones/'.$row->proj_id, 'Revisiones');?>_______<br>
        	<?=anchor('proyectos/investigacion/'.$row->proj_id, 'Investigacion');?>_______<br>
        	<?=anchor('proyectos/ti/'.$row->proj_id, 'Tormenta de ideas');?>_______<br>
		<?=anchor('proyectos/estrategias/'.$row->proj_id, 'Estrategias');?>_______</td>
        <td><?=anchor('proyectos/parahacer/'.$row->proj_id, 'Para hacer (en construcción)...');?>_______<br>
		<?=anchor('proyectos/controles/'.$row->proj_id, 'Controles (en contrucción)');?>______<br>
        	<?=anchor('proyectos/uso_proyecto/'.$row->proj_id, 'uso/horas...');?>_______</p></td>
      <tr>
      <tr>
    </table>
    
    <?php endforeach;?>

<?php endif; ?>


    <hr>
    
   <h3>Proyectos Detalles / subproyectos</h3>
  <?=form_open('proyectos/detalles_insert'); ?>
    <p>Nombre del proyecto  <input type="text" name="proj_nombre" /></p>
    <p>Paternidad  <input type="text" name="proj_parent" /></p>
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
