<div class="ndTeachers form">
<?php echo $form->create('NdTeacher');?>
	<fieldset>
 		<legend><?php __('Edit NdTeacher');?></legend>
	<?php
		echo $form->input('teacher_id');
		echo $form->input('branch_ids', array('empty' => true));
//		echo $form->input('branch_id', array('empty' => true));
		echo $form->input('teacher_position_id', array('empty' => true));
		echo $form->input('teacher_name');
		echo $form->input('teacher_ename');
		echo $form->input('teacher_thumbnail');
		echo $form->input('teacher_text');
		echo $form->input('facebook_url');
		echo $form->input('is_valid');
		echo $form->input('weighted_value');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('NdTeacher.teacher_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('NdTeacher.teacher_id'))); ?></li>
		<li><?php echo $html->link(__('List NdTeachers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Teacher Positions', true), array('controller' => 'teacher_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teacher Position', true), array('controller' => 'teacher_positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
