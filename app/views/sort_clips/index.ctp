<div class="ndStats index">
<h2><?php __('SortClips');?></h2>
<?php echo $form->create('SortClip', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<p>Category</p>
<?php echo $form->select('NdClip.category_id', $ndCategories)?>
|
<p>범위(현재부터)</p>
<?php echo $form->text('range')?> 일
<input type="submit" name="submit" value="검색" />
<input type="button" value="전체보기" onclick="location.href='<?php echo $html->url(array('controller'=>'ad_placements', 'action'=>'index'));?>'" />
</div>
<?php echo $form->end() ?>

<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('clip_id');?></th>
	<th><?php echo $paginator->sort('category_id');?></th>
	<th><?php echo $paginator->sort('clip_start');?></th>
	<th><?php echo $paginator->sort('clip_title');?></th>
	<th><?php echo $paginator->sort('clip_credit');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ndClips as $ndClip):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ndClip['NdClip']['clip_id']; ?>
		</td>
		<td>
			<?php echo $html->link($ndClip['NdCategory']['category_name'], array('controller' => 'nd_categories', 'action' => 'view', $ndClip['NdCategory']['category_id'])); ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_start']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_title']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_credit']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndClip['NdClip']['clip_id'])); ?>
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
		<li><?php echo $html->link(__('New NdClip', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Nd Genres', true), array('controller' => 'nd_genres', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Genre', true), array('controller' => 'nd_genres', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Categories', true), array('controller' => 'nd_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Category', true), array('controller' => 'nd_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Clip Additions', true), array('controller' => 'nd_clip_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Clip Addition', true), array('controller' => 'nd_clip_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
