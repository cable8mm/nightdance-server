<div class="monthSales form">
<?php echo $form->create('MonthSale');?>
	<fieldset>
 		<legend><?php __('Add MonthSale');?></legend>
	<?php
		echo $form->input('date');
		echo $form->input('price');
		echo $form->input('selling_count');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MonthSales', true), array('action' => 'index'));?></li>
	</ul>
</div>
