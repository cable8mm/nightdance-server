<div class="ndTeachers index">
<h2><?php __('NdTeachers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('teacher_id');?></th>
	<th><?php echo $paginator->sort('branch_ids');?></th>
	<th><?php echo $paginator->sort('teacher_position_id');?></th>
	<th><?php echo $paginator->sort('teacher_name');?></th>
	<th><?php echo $paginator->sort('teacher_ename');?></th>
	<th><?php echo $paginator->sort('teacher_thumbnail');?></th>
	<th><?php echo $paginator->sort('is_valid');?></th>
	<th><?php echo $paginator->sort('weighted_value');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ndTeachers as $ndTeacher):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ndTeacher['NdTeacher']['teacher_id']; ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['branch_ids']; ?>
		</td>
		<td>
			<?php echo $html->link($ndTeacher['TeacherPosition']['name'], array('controller' => 'teacher_positions', 'action' => 'view', $ndTeacher['TeacherPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['teacher_name']; ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['teacher_ename']; ?>
		</td>
		<td>
			<?php echo $html->image($ndTeacher['NdTeacher']['teacher_thumbnail']); ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['is_valid']; ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['weighted_value']; ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['created']; ?>
		</td>
		<td>
			<?php echo $ndTeacher['NdTeacher']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndTeacher['NdTeacher']['teacher_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $ndTeacher['NdTeacher']['teacher_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $ndTeacher['NdTeacher']['teacher_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndTeacher['NdTeacher']['teacher_id'])); ?>
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
		<li><?php echo $html->link(__('New NdTeacher', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Teacher Positions', true), array('controller' => 'teacher_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teacher Position', true), array('controller' => 'teacher_positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
