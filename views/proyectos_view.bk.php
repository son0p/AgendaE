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
 color: #003399;
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
	color: #333;
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
	border-bottom: 1px solid #333;
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
	color: #333;
	background: #c6c6e8;
}

tbody tr th:hover {
	background:#fff;
}

table a:visited {
	text-decoration: line-through;
	color:#666;
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


    
    
<h1>Proyectos Activos</h1>

<?php foreach($query->result() as $row):?>

<table>
<tr>
<td><h3><?=$row->proj_mast_name?></h3></td>
<td><?=$row->proj_mast_resu?></td>
<td><?=anchor('proyectos/fachada/'.$row->proj_mast_id, 'Fachada');?></td>
 
<tr>
</table>




<?php endforeach;?>


<h1><?=anchor('proyectos_off/', 'Proyectos inactivos');?></h1></p>


<hr>


<? echo 'Resultados: ' . $query->num_rows();?>
 

<br><br>
    <?php
    $target = mktime(0, 0, 0, 12, 5, 2008) ;
    $today = time () ;
    $difference =($target-$today) ;
    $days =(int) ($difference/86400) ;
    print "an event will occur in $days days";
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
