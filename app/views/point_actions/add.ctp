<div class="invitations form">
<?php echo $form->create('PointAction');?>
	<fieldset>
 		<legend><?php __('Add Point Action');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('point');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Point Actions', true), array('action' => 'index'));?></li>
	</ul>
</div>
