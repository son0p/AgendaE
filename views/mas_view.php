<?php 


$this->load->view("inc/header")?>

<div id="splash"></div>
	<div id="page">
		<div id="content">
		
			
			
			<div class="post">
							<table>
		<tr>
		<?php foreach($query->result() as $row):?>
			<td width="200">
				<img src="<?= $row->thumb?>" width="200" height="200" alt="" />
				<h2 class="title"><a href="#"><?= $row->titulo?> </a></h2>
				<p class="meta"><span class="date">
				<?= $row->agenda_fecha?> a las <?=$row->agenda_hora?> horas.<br />
				<?=$row->lugar?><br />
				<?=$row->agenda_costo?></span>
				</p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					
					<a href="<?php echo $row->link;?>" />link</a>
					</p>
					
							
				</div>

			</td>

<?php endforeach;?>


</tr>
</table>
			
			<div style="clear: both;">&nbsp;</div>
		</div>





	</div>
</div>		
		


		<div style="clear: both;">&nbsp;</div>
	
		</div> <!-- end warper -->




