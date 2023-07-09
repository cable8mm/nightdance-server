<div class="ndStats form">
<?php echo $form->create('NdStat');?>
	<fieldset>
 		<legend><?php __('Add NdStat');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('stats_time');
		echo $form->input('stats_term');
		echo $form->input('stats_typed');
		echo $form->input('stats_num');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List NdStats', true), array('action' => 'index'));?></li>
	</ul>
</div>
