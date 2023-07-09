<div class="apiCoupons view">
<h2><?php  __('ApiCoupon');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $apiCoupon['ApiCoupon']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Api Coupon Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($apiCoupon['ApiCouponGroup']['name'], array('controller' => 'api_coupon_groups', 'action' => 'view', $apiCoupon['ApiCouponGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Serial'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $apiCoupon['ApiCoupon']['serial']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Until'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $apiCoupon['ApiCoupon']['until']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Issued'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $apiCoupon['ApiCoupon']['issued']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Api User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($apiCoupon['ApiUser']['id'], array('controller' => 'api_users', 'action' => 'view', $apiCoupon['ApiUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ApiCoupon', true), array('action' => 'edit', $apiCoupon['ApiCoupon']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ApiCoupon', true), array('action' => 'delete', $apiCoupon['ApiCoupon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $apiCoupon['ApiCoupon']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ApiCoupons', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New ApiCoupon', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Api Coupon Groups', true), array('controller' => 'api_coupon_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Api Coupon Group', true), array('controller' => 'api_coupon_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Api Users', true), array('controller' => 'api_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Api User', true), array('controller' => 'api_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
