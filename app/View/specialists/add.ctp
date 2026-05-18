<div class="specialists form">
<?php echo $form->create('Specialist');?>
	<fieldset>
 		<legend><?php __('Add Specialist');?></legend>
	<?php
		echo $form->input('code');
		echo $form->input('name');
		echo $form->input('enrolled_date');
		echo $form->input('branch_id');
		echo $form->input('gisu');
		echo $form->input('photo_url');
		echo $form->input('website');
		echo $form->input('email');
		echo $form->input('cell_phone');
		echo $form->input('address');
		echo $form->input('id_number');
		echo $form->input('schooling');
		echo $form->input('certification');
		echo $form->input('prize');
		echo $form->input('career');
		echo $form->input('working_place');
		echo $form->input('married');
		echo $form->input('enabled_genre');
		echo $form->input('kpd_description');
		echo $form->input('vod');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Specialists', true), array('action' => 'index'));?></li>
	</ul>
</div>
