<div class="apiCoupons index">
<h2><?php __('ApiCoupons');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('api_coupon_group_id');?></th>
	<th><?php echo $paginator->sort('serial');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('type_number');?></th>
	<th><?php echo $paginator->sort('until');?></th>
	<th><?php echo $paginator->sort('issued');?></th>
	<th><?php echo $paginator->sort('api_user_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($apiCoupons as $apiCoupon):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($apiCoupon['ApiCouponGroup']['name'], array('controller' => 'api_coupon_groups', 'action' => 'view', $apiCoupon['ApiCouponGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['serial']; ?>
		</td>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['type']; ?>
		</td>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['type_number']; ?>
		</td>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['until']; ?>
		</td>
		<td>
			<?php echo $apiCoupon['ApiCoupon']['issued']; ?>
		</td>
		<td>
			<?php echo $html->link($apiCoupon['ApiUser']['id'], array('controller' => 'api_users', 'action' => 'view', $apiCoupon['ApiUser']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $apiCoupon['ApiCoupon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $apiCoupon['ApiCoupon']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New ApiCoupon', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Api Coupon Groups', true), array('controller' => 'api_coupon_groups', 'action' => 'index')); ?> </li>
	</ul>
</div>
