<div class="ndUsers index">
<h2><?php __('NdUsers');?></h2>

<?php echo $form->create('NdUser', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<?php echo $form->select('NdUser.select', array('username_1'=>'완벽아이디','username_2'=>'왼쪽아이디','username_3'=>'오른쪽아이디','username_4'=>'중간아이디','user_email'=>'이메일','user_tel'=>'전화번호','realname'=>'실명','user_id'=>'회원번호','nickname'=>'닉네임'))?>

<?php echo $form->text('NdUser.select_data')?>

<input type="submit" name="submit" value="검색" />
<input type="button" value="전체보기" onclick="location.href='<?php echo $html->url(array('controller'=>'nd_users', 'action'=>'index'));?>'" />
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
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('user_ncash');?></th>
	<th><?php echo $paginator->sort('user_ncash_amount');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('nickname');?></th>
	<th><?php echo $paginator->sort('user_password');?></th>
	<th><?php echo $paginator->sort('user_type');?></th>
	<th><?php echo $paginator->sort('point');?></th>
	<th><?php echo $paginator->sort('user_kywdance_agree_date');?></th>
	<th><?php echo $paginator->sort('user_is_kywdance_agree');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ndUsers as $ndUser):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ndUser['NdUser']['user_id']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_ncash']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_ncash_amount']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['username']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['nickname']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_password']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_type']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['point']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_kywdance_agree_date']; ?>
		</td>
		<td>
			<?php echo $ndUser['NdUser']['user_is_kywdance_agree']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndUser['NdUser']['user_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $ndUser['NdUser']['user_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $ndUser['NdUser']['user_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndUser['NdUser']['user_id'])); ?>
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
		<li><?php echo $html->link(__('New NdUser', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Nd User Additions', true), array('controller' => 'nd_user_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd User Addition', true), array('controller' => 'nd_user_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
