<?php $this->load->view("inc/header.php")?>


<?php echo $this->table->generate($results); ?>


 <?php echo $this->pagination->create_links(); ?>


 



<p><br />Page rendered in {elapsed_time} seconds</p>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-727073-1";
urchinTracker();
</script>
</body>
</html>
