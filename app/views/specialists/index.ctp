<div class="specialists index">
<h2><?php __('Specialists');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('code');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('enrolled_date');?></th>
	<th><?php echo $paginator->sort('branch_id');?></th>
	<th><?php echo $paginator->sort('gisu');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('cell_phone');?></th>
	<th><?php echo $paginator->sort('married');?></th>
	<th><?php echo $paginator->sort('enabled_genre');?></th>
	<th>is_vod</th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($specialists as $specialist):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $specialist['Specialist']['id']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['code']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['name']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['enrolled_date']; ?>
		</td>
		<td>
			<?php echo $specialist['Branch']['name']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['gisu']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['email']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['cell_phone']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['married']; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['enabled_genre']; ?>
		</td>
		<td>
			<?php if(empty($specialist['Specialist']['vod'])) echo 'X'; else echo  'Y'; ?>
		</td>
		<td>
			<?php echo $specialist['Specialist']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $specialist['Specialist']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $specialist['Specialist']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $specialist['Specialist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $specialist['Specialist']['id'])); ?>
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
		<li><?php echo $html->link(__('New Specialist', true), array('action' => 'add')); ?></li>
	</ul>
</div>
