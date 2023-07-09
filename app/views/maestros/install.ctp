<div class="maestros form">
<?php echo $form->create('Maestro', array('action'=>'install'));?>
	<fieldset>
 		<legend><?php __('Add Maestro');?></legend>
	<?php
		echo $form->input('maestro_group_id');
		echo $form->input('name');
		echo $form->input('username');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Maestros', true), array('action'=>'index'));?></li>
	</ul>
</div>