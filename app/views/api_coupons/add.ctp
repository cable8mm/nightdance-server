<div class="apiCoupons form">
<?php echo $form->create('ApiCoupon');?>
	<fieldset>
 		<legend><?php __('Add ApiCoupon');?></legend>
	<?php
		echo $form->input('api_coupon_group_id');
		echo $form->input('until');
		echo $form->input('count');		
		echo $form->input('type');
		echo $form->input('type_number');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ApiCoupons', true), array('action' => 'index'));?></li>
	</ul>
</div>
