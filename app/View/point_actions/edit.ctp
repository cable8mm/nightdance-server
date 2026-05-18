<div class="invitations form">
<?php echo $form->create('Point Action');?>
	<fieldset>
 		<legend><?php __('Edit Point Action');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('point');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('id'))); ?></li>
		<li><?php echo $html->link(__('List Point Actions', true), array('action' => 'index'));?></li>
	</ul>
</div>
