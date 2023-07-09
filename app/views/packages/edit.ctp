<div class="packages form">
<?php echo $form->create('Package');?>
	<fieldset>
 		<legend><?php __('Edit Package');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('payment');
		echo $form->input('term');
		echo $form->input('clips_count');
		echo $form->input('name');
		echo $form->input('list_image');
		echo $form->input('view_image');
		echo $form->input('thumbnail');
		echo $form->input('clip_ids');
		echo $form->input('description');
		echo $form->input('is_active');
		echo $form->input('is_samsungtv');
		echo $form->input('title_for_samsungtv');
		echo $form->input('price_for_samsungtv');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Package.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Package.id'))); ?></li>
		<li><?php echo $html->link(__('List Packages', true), array('action' => 'index'));?></li>
	</ul>
</div>
