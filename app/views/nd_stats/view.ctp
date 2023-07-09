<div class="ndStats view">
<h2><?php  __('NdStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stats Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['stats_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stats Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['stats_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stats Term'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['stats_term']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stats Typed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['stats_typed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stats Num'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndStat['NdStat']['stats_num']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit NdStat', true), array('action' => 'edit', $ndStat['NdStat']['stats_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete NdStat', true), array('action' => 'delete', $ndStat['NdStat']['stats_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndStat['NdStat']['stats_id'])); ?> </li>
		<li><?php echo $html->link(__('List NdStats', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New NdStat', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
