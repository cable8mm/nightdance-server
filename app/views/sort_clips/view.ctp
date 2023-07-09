<div class="ndClips view">
<h2><?php  __('NdClip');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nd Genre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ndClip['NdGenre']['genre_name'], array('controller' => 'nd_genres', 'action' => 'view', $ndClip['NdGenre']['genre_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nd Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ndClip['NdCategory']['category_name'], array('controller' => 'nd_categories', 'action' => 'view', $ndClip['NdCategory']['category_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Filesize'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_filesize']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Framerate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_framerate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Height'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_height']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Width'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_width']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Thumbnail Height'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_thumbnail_height']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Thumbnail Width'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_thumbnail_width']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Start'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_start']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Thumbnail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_thumbnail']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Credit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_credit']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Pr'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_pr']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Bang'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_bang']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Mirror'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ndClip['NdClip']['clip_mirror']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit NdClip', true), array('action' => 'edit', $ndClip['NdClip']['clip_id'])); ?> </li>
		<li><?php echo $html->link(__('Delete NdClip', true), array('action' => 'delete', $ndClip['NdClip']['clip_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndClip['NdClip']['clip_id'])); ?> </li>
		<li><?php echo $html->link(__('List NdClips', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New NdClip', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Genres', true), array('controller' => 'nd_genres', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Genre', true), array('controller' => 'nd_genres', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Categories', true), array('controller' => 'nd_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Category', true), array('controller' => 'nd_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Nd Clip Additions', true), array('controller' => 'nd_clip_additions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Nd Clip Addition', true), array('controller' => 'nd_clip_additions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Nd Clip Additions');?></h3>
	<?php if (!empty($ndClip['NdClipAddition'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Payment');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_payment'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Sample Url');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_sample_url'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Rate1');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_rate1'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Rate2');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_rate2'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Term');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_term'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Level');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_level'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Sex');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_sex'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Music Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['music_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Cnt');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_cnt'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Music Limit');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_music_limit'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Release');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_release'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clip Mobile');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $ndClip['NdClipAddition']['clip_mobile'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Nd Clip Addition', true), array('controller' => 'nd_clip_additions', 'action' => 'edit', $ndClip['NdClipAddition']['clip_id'])); ?></li>
			</ul>
		</div>
	</div>
	