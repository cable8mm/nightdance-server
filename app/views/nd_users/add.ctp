<div class="ndUsers form">
<?php echo $form->create('NdUser');?>
	<fieldset>
 		<legend><?php __('Add NdUser');?></legend>
	<?php
		echo $form->input('user_ncash');
		echo $form->input('user_ncash_amount');
		echo $form->input('username');
		echo $form->input('nickname');
		echo $form->input('user_password');
		echo $form->input('user_type');
		echo $form->input('point');
		echo $form->input('user_kywdance_agree_date');
		echo $form->input('user_is_kywdance_agree');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List NdUsers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Nd User Additions', true), array('controller' => 'nd_user_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd User Addition', true), array('controller' => 'nd_user_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
