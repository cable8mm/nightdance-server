<div class="packages index">
<h2><?php __('Packages');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('payment');?></th>
	<th><?php echo $paginator->sort('term');?></th>
	<th><?php echo $paginator->sort('clips_count');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('thumbnail');?></th>
	<th><?php echo $paginator->sort('is_active');?></th>
	<th><?php echo $paginator->sort('is_samsungtv');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($packages as $package):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $package['Package']['id']; ?>
		</td>
		<td>
			<?php echo $package['Package']['payment']; ?>
		</td>
		<td>
			<?php echo $package['Package']['term']; ?>
		</td>
		<td>
			<?php echo $package['Package']['clips_count']; ?>
		</td>
		<td>
			<?php echo $package['Package']['name']; ?>
		</td>
		<td>
			<?php echo $html->image($package['Package']['thumbnail']); ?>
		</td>
		<td>
			<?php echo $package['Package']['is_active']; ?>
		</td>
		<td>
			<?php echo $package['Package']['is_samsungtv']; ?>
		</td>
		<td>
			<?php echo $package['Package']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $package['Package']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $package['Package']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $package['Package']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $package['Package']['id'])); ?>
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
		<li><?php echo $html->link(__('New Package', true), array('action' => 'add')); ?></li>
	</ul>
</div>
