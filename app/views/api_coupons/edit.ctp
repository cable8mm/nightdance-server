<div class="apiCoupons form">
<?php echo $form->create('ApiCoupon');?>
	<fieldset>
 		<legend><?php __('Edit ApiCoupon');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('api_coupon_group_id');
		echo $form->input('serial');
		echo $form->input('until');
		echo $form->input('issued');
		echo $form->input('api_user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ApiCoupon.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ApiCoupon.id'))); ?></li>
		<li><?php echo $html->link(__('List ApiCoupons', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Api Coupon Groups', true), array('controller' => 'api_coupon_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Api Coupon Group', true), array('controller' => 'api_coupon_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Api Users', true), array('controller' => 'api_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Api User', true), array('controller' => 'api_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
