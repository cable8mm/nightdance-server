<div class="monthSales index">
<h2><?php __('MonthSales');?></h2>

<form id="NdUserIndexForm" method="get" action=""><div class="adminSearchBox">
<span style="font-weight:bold"> Search :</span>
<select name="select" id="NdUserSelect">
<option value=""></option>
<option value="nickname">Total</option>
</select>
<input name="select_data" type="text" value="" id="NdUserSelectData" />
<input type="submit" name="submit" value="Submit" />
<input type="button" value="reset" onclick="location.href='/month_sales'" />
</div>
</form>

<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th>Month</th>
	<th>Sales</th>
	<th>Selling Count</th>
</tr>
<?php
$i = 0;
foreach ($monthSales as $monthSale):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo preg_replace('/-..$/', '', $monthSale['MonthSale']['date']); ?>
		</td>
		<td>
			<?php echo $monthSale['MonthSale']['price']; ?>
		</td>
		<td>
			<?php echo $monthSale['MonthSale']['selling_count']; ?>
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
		<li><?php echo $html->link(__('New MonthSale', true), array('action' => 'add')); ?></li>
	</ul>
</div>
