<style>
INPUT#NdStatStatsTypedT, INPUT#NdStatStatsTypedC {display:inline} 
</style>
<div class="ndStats form">
<?php echo $form->create('NdStat');?>
	<fieldset>
 		<legend><?php __('Edit NdStat');?></legend>
	<?php
		echo $form->input('stats_id');
		echo $form->input('user_id', array('readonly'=>'readonly'));
		echo $form->input('stats_time', array('type'=>'datetime'));
		echo $form->input('stats_term');
		echo $form->input('stats_typed', array('type'=>'select', 'options'=>array('c'=>'clip', 't'=>'ticket'), array('empty'=>null)));
		echo $form->input('stats_num');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('NdStat.stats_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('NdStat.stats_id'))); ?></li>
		<li><?php echo $html->link(__('List NdStats', true), array('action' => 'index'));?></li>
	</ul>
</div>
