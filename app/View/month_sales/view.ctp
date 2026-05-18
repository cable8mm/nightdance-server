<div class="monthSales view">
<h2><?php  __('MonthSale');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $monthSale['MonthSale']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $monthSale['MonthSale']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $monthSale['MonthSale']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Selling Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $monthSale['MonthSale']['selling_count']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MonthSale', true), array('action' => 'edit', $monthSale['MonthSale']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MonthSale', true), array('action' => 'delete', $monthSale['MonthSale']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $monthSale['MonthSale']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MonthSales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New MonthSale', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
