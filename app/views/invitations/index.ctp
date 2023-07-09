<?php
$passedArgs['create_year'] = $this->data['Invitation']['create_year'];
$paginator->options(array('url' => $passedArgs));?>	
<div class="invitations index">
<h2><?php __('Invitations');?></h2>
<?php echo $form->create('Invitation', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<p>등록 년
<?php echo $form->select('Invitation.create_year', array(2010=>2010, 2009=>2009, 2008=>2008))?>
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
	<th><?php echo $paginator->sort('corp');?></th>
	<th><?php echo $paginator->sort('team');?></th>
	<th><?php echo $paginator->sort('role');?></th>
	<th><?php echo $paginator->sort('tel');?></th>
	<th><?php echo $paginator->sort('cel');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($invitations as $invitation):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $invitation['Invitation']['id']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['name']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['corp']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['team']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['role']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['tel']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['cel']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['email']; ?>
		</td>
		<td>
			<?php echo $invitation['Invitation']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $invitation['Invitation']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $invitation['Invitation']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $invitation['Invitation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $invitation['Invitation']['id'])); ?>
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
		<li><?php echo $html->link(__('New Invitation', true), array('action' => 'add')); ?></li>
	</ul>
</div>
