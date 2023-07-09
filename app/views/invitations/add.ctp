<div class="invitations form">
<?php echo $form->create('Invitation');?>
	<fieldset>
 		<legend><?php __('Add Invitation');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('corp');
		echo $form->input('team');
		echo $form->input('role');
		echo $form->input('tel');
		echo $form->input('cel');
		echo $form->input('email');
		echo $form->input('contents');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Invitations', true), array('action' => 'index'));?></li>
	</ul>
</div>
