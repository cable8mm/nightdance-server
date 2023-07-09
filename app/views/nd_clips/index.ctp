<div class="ndClips index">
<h2><?php __('NdClips');?></h2>
<?php echo $form->create('NdClip', array('action'=>'index','type'=>'get'))?>
<div class="adminSearchBox">
<span style="font-weight:bold">검색 :</span>
<p>Search Word</p>
|<?php echo $form->text('NdClip.search_word')?>
<input type="submit" name="submit" value="검색" />
<input type="button" value="전체보기" onclick="location.href='<?php echo $html->url(array('controller'=>'nd_clips', 'action'=>'index'));?>'" />
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
	<th><?php echo $paginator->sort('genre_id');?></th>
	<th><?php echo $paginator->sort('category_id');?></th>
	<th><?php echo $paginator->sort('clip_category_id');?></th>
	<th><?php echo $paginator->sort('clip_thumbnail');?></th>
	<th><?php echo $paginator->sort('clip_title');?></th>
	<th><?php echo $paginator->sort('clip_duration');?></th>
	<th><?php echo $paginator->sort('clip_credit');?></th>
	<th><?php echo $paginator->sort('clip_bang');?></th>
	<th><?php echo $paginator->sort('clip_mirror');?></th>
	<th><?php echo $paginator->sort('clip_is_qook');?></th>
	<th><?php echo $paginator->sort('clip_is_skbtv');?></th>
	<th><?php echo $paginator->sort('clip_is_lguplus');?></th>
	<th><?php echo $paginator->sort('clip_is_samsungtv');?></th>
	<th><?php echo $paginator->sort('clip_is_mobile');?></th>
	<th><?php echo $paginator->sort('clip_release');?></th>
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
			<?php echo $html->link($ndClip['NdGenre']['genre_name'], array('controller' => 'nd_genres', 'action' => 'view', $ndClip['NdGenre']['genre_id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ndClip['NdCategory']['category_name'], array('controller' => 'nd_categories', 'action' => 'view', $ndClip['NdCategory']['category_id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ndClip['ClipCategory']['name'], array('controller' => 'clip_categories', 'action' => 'view', $ndClip['ClipCategory']['clip_category_id'])); ?>
		</td>
		<td>
<?php
$clipThumbnail = preg_replace('/\.jpg$/i', '_s.gif', $ndClip['NdClip']['clip_thumbnail']);
echo '<img src=\'http://mail.nightdance.co.kr/img/lecture/'.$clipThumbnail.'\' />';
?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_title']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_duration']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_credit']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_bang']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_mirror']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_is_qook']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_is_skbtv']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_is_lguplus']; ?>
		</td>
		<td>
			<?php echo $ndClip['NdClip']['clip_is_samsungtv']; ?>
		</td>
		<td>
<?php
define('PREFIX_PREVIEW_CLIP', 'http://stream.nightdance.co.kr/preview/');
define('PREFIX_VIEW_CLIP', 'http://stream.nightdance.co.kr/rmaksgofk/');
define('PREFIX_FREEVIEW_CLIP', 'http://stream.nightdance.co.kr/nightdance/');

		if ($ndClip['NdClip']['clip_category_id'] == 13 || $ndClip['NdClip']['clip_category_id'] == 14 ) {
			$mobileClipUrl	= preg_replace('/^(.+)\....$/i', PREFIX_FREEVIEW_CLIP."\\1".'.mp4', $ndClip['NdClip']['clip_url']);
		} else {
			$mobileClipUrl	= preg_replace('/^(.+)\....$/i', PREFIX_VIEW_CLIP."\\1".'.mp4', $ndClip['NdClip']['clip_url']);
		}
		if($ndClip['NdClipAddition']['clip_sample_url'] != '') {
			$mobilePreviewUrl	= preg_replace('/^(.+)\....$/i', PREFIX_PREVIEW_CLIP."\\1".'.mp4', $ndClip['NdClipAddition']['clip_sample_url']);
		}
?>
			<?php echo $ndClip['NdClip']['clip_is_mobile']; ?> (<a href="<?php echo $mobilePreviewUrl;?>" target="_blank">preview</a> / <a href="<?php echo $mobileClipUrl;?>" target="_blank">clip</a>)
		</td>
		<td>
			<?php echo $ndClip['NdClipAddition']['clip_release']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $ndClip['NdClip']['clip_id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $ndClip['NdClip']['clip_id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $ndClip['NdClip']['clip_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ndClip['NdClip']['clip_id'])); ?>
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
