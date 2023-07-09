<div class="ndTeachers view">
<h2><?php  __('NdTeacher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['teacher_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Branch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['branch_ids']; ?>
			&nbsp;
		</dd>
<!--
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Branch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['branch_ids']; ?>
			&nbsp;
		</dd>
-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ndTeacher['TeacherPosition']['name'], array('controller' => 'teacher_positions', 'action' => 'view', $ndTeacher['TeacherPosition']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['teacher_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Ename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['teacher_ename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Thumbnail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['teacher_thumbnail']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['teacher_text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Valid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['is_valid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Facebook Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['facebook_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Weighted Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['weighted_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndTeacher['NdTeacher']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit NdTeacher', true), array('action' => 'edit', $ndTeacher['NdTeacher']['teacher_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete NdTeacher', true), array('action' => 'delete', $ndTeacher['NdTeacher']['teacher_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndTeacher['NdTeacher']['teacher_id'])); ?> </li>
		<li><?php echo $html->link(__('List NdTeachers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New NdTeacher', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teacher Positions', true), array('controller' => 'teacher_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teacher Position', true), array('controller' => 'teacher_positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
