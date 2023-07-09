<div class="internships form">
<?php echo $form->create('Internship');?>
	<fieldset>
 		<legend><?php __('Edit Internship');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('birth');
		echo $form->input('sex');
		echo $form->input('photo');
		echo $form->input('major');
		echo $form->input('address');
		echo $form->input('email');
		echo $form->input('cel');
		echo $form->input('contents');
		echo $form->input('question');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Internship.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Internship.id'))); ?></li>
		<li><?php echo $html->link(__('List Internships', true), array('action' => 'index'));?></li>
	</ul>
</div>
