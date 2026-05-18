<div class="ndStats index">
<h2><?php __('NdStats');?></h2>
<?php echo $form->create('NdStat', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<p>Stats Typed</p>
<?php echo $form->select('NdStat.stats_typed', array('c'=>'c','t'=>'t'))?>
|
<p>User Number</p>
<?php echo $form->text('NdStat.user_id')?>
|
<p>Username</p>
<?php echo $form->text('NdStat.username')?>
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
	<th><?php echo $paginator->sort('stats_id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('stats_time');?></th>
	<th><?php echo $paginator->sort('stats_term');?></th>
	<th><?php echo $paginator->sort('stats_typed');?></th>
	<th><?php echo $paginator->sort('stats_num');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ndStats as $ndStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ndStat['NdStat']['stats_id']; ?>
		</td>
		<td>
			<?php echo $ndStat['NdUser']['username']; ?> | <?php echo $ndStat['NdUser']['nickname']; ?>
		</td>
		<td>
			<?php echo date("Y-m-d H:i:s", $ndStat['NdStat']['stats_time']); ?>
		</td>
		<td>
			<?php echo $ndStat['NdStat']['stats_term']; ?>
		</td>
		<td>
			<?php echo $ndStat['NdStat']['stats_typed']; ?>
		</td>
		<td>
			<?php echo $ndStat['NdStat']['stats_num']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndStat['NdStat']['stats_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $ndStat['NdStat']['stats_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $ndStat['NdStat']['stats_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndStat['NdStat']['stats_id'])); ?>
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
		<li><?php echo $html->link(__('New NdStat', true), array('action' => 'add')); ?></li>
	</ul>
</div>
