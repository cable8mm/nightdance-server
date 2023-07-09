<div class="ndUsers view">
<h2><?php  __('NdUser');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Ncash'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_ncash']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Ncash Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_ncash_amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nickname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['nickname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Point'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['point']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Kywdance Agree Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_kywdance_agree_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Is Kywdance Agree'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndUser['NdUser']['user_is_kywdance_agree']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit NdUser', true), array('action' => 'edit', $ndUser['NdUser']['user_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete NdUser', true), array('action' => 'delete', $ndUser['NdUser']['user_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndUser['NdUser']['user_id'])); ?> </li>
		<li><?php echo $html->link(__('List NdUsers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New NdUser', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd User Additions', true), array('controller' => 'nd_user_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd User Addition', true), array('controller' => 'nd_user_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Nd User Additions');?></h3>
	<?php if (!empty($ndUser['NdUserAddition'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Realname');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['realname'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Tel');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['user_tel'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Email');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['user_email'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Time');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['user_time'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mypage Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndUser['NdUserAddition']['mypage_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Nd User Addition', true), array('controller' => 'nd_user_additions', 'action' => 'edit', $ndUser['NdUserAddition']['user_id'])); ?></li>
			</ul>
		</div>
	</div>
	