<div class="ndForums form">
<?php echo $form->create('NdForum');?>
	<fieldset>
 		<legend><?php __('Edit NdForum');?></legend>
	<?php
		echo $form->input('forum_id');
		echo $form->input('forum_topics_cnt');
		echo $form->input('forum_url');
		echo $form->input('forum_name');
		echo $form->input('forum_text');
		echo $form->input('forum_category');
		echo $form->input('forum_icon');
		echo $form->input('forum_skin');
		echo $form->input('forum_is_kywdance');
		echo $form->input('forum_is_nightdance');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('NdForum.forum_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('NdForum.forum_id'))); ?></li>
		<li><?php echo $html->link(__('List NdForums', true), array('action' => 'index'));?></li>
	</ul>
</div>
