<?php
$passedArgs['create_year'] = $this->data['PointAction']['create_year'];
$paginator->options(array('url' => $passedArgs));?>	
<div class="PointActions index">
<h2><?php __('PointActions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('point');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($PointActions as $PointAction):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $PointAction['PointAction']['id']; ?>
		</td>
		<td>
			<?php echo $PointAction['PointAction']['name']; ?>
		</td>
		<td>
			<?php echo $PointAction['PointAction']['point']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $PointAction['PointAction']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $PointAction['PointAction']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $PointAction['PointAction']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $PointAction['PointAction']['id'])); ?>
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
		<li><?php echo $html->link(__('New PointAction', true), array('action' => 'add')); ?></li>
	</ul>
</div>
