<?php
$passedArgs['create_year'] = $this->data['Internship']['create_year'];
$paginator->options(array('url' => $passedArgs));?>	
<div class="internships index">
<h2><?php __('Internships');?></h2>
<?php echo $form->create('Internship', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<p>등록 년
<?php
foreach(range(date("Y"), 2008) as $year):
	$ranges[$year]	= $year;
endforeach;

echo $form->select('Internship.create_year', $ranges)?>
<input type="submit" name="submit" value="검색" />
<input type="button" value="전체보기" onclick="location.href='<?php echo $html->url(array('controller'=>'invitations', 'action'=>'index'));?>'" />
</p>
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
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('birth');?></th>
	<th><?php echo $paginator->sort('sex');?></th>
	<th><?php echo $paginator->sort('photo');?></th>
	<th><?php echo $paginator->sort('major');?></th>
	<th><?php echo $paginator->sort('address');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('cel');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($internships as $internship):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $internship['Internship']['id']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['name']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['birth']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['sex']; ?>
		</td>
		<td>
			<?php echo $html->image('http://www.nightdance.co.kr/images/internships/'.$internship['Internship']['photo'], array('style'=>'width:25px')); ?>
		</td>
		<td>
			<?php echo $internship['Internship']['major']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['address']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['email']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['cel']; ?>
		</td>
		<td>
			<?php echo $internship['Internship']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $internship['Internship']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $internship['Internship']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $internship['Internship']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $internship['Internship']['id'])); ?>
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
		<li><?php echo $html->link(__('New Internship', true), array('action' => 'add')); ?></li>
	</ul>
</div>
