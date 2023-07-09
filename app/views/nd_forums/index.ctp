<div class="ndForums index">
<h2><?php __('NdForums');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('forum_id');?></th>
	<th><?php echo $paginator->sort('forum_topics_cnt');?></th>
	<th><?php echo $paginator->sort('forum_url');?></th>
	<th><?php echo $paginator->sort('forum_name');?></th>
	<th><?php echo $paginator->sort('forum_text');?></th>
	<th><?php echo $paginator->sort('forum_category');?></th>
	<th><?php echo $paginator->sort('forum_icon');?></th>
	<th><?php echo $paginator->sort('forum_skin');?></th>
	<th><?php echo $paginator->sort('forum_is_kywdance');?></th>
	<th><?php echo $paginator->sort('forum_is_nightdance');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ndForums as $ndForum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ndForum['NdForum']['forum_id']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_topics_cnt']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_url']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_name']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_text']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_category']; ?>
		</td>
		<td>
			<?php if(!empty($ndForum['NdForum']['forum_icon'])) echo $html->image($ndForum['NdForum']['forum_icon']); ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_skin']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_is_kywdance']; ?>
		</td>
		<td>
			<?php echo $ndForum['NdForum']['forum_is_nightdance']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndForum['NdForum']['forum_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $ndForum['NdForum']['forum_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $ndForum['NdForum']['forum_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndForum['NdForum']['forum_id'])); ?>
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
		<li><?php echo $html->link(__('New NdForum', true), array('action' => 'add')); ?></li>
	</ul>
</div>
