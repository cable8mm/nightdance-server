<div class="ndClips form">
<?php echo $form->create('NdClip');?>
	<fieldset>
 		<legend><?php __('Add NdClip');?></legend>
	<?php
		echo $form->input('genre_id');
		echo $form->input('category_id');
		echo $form->input('clip_filesize');
		echo $form->input('clip_framerate');
		echo $form->input('clip_duration');
		echo $form->input('clip_height');
		echo $form->input('clip_width');
		echo $form->input('clip_thumbnail_height');
		echo $form->input('clip_thumbnail_width');
		echo $form->input('clip_start');
		echo $form->input('clip_thumbnail');
		echo $form->input('clip_title');
		echo $form->input('clip_url');
		echo $form->input('clip_credit');
		echo $form->input('clip_pr');
		echo $form->input('clip_text');
		echo $form->input('clip_bang');
		echo $form->input('clip_mirror');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List NdClips', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Nd Genres', true), array('controller' => 'nd_genres', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Genre', true), array('controller' => 'nd_genres', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Categories', true), array('controller' => 'nd_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Category', true), array('controller' => 'nd_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Clip Additions', true), array('controller' => 'nd_clip_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Clip Addition', true), array('controller' => 'nd_clip_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
