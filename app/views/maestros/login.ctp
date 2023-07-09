<style>
#content DIV.centerBox {
	width:400px; height:400px;
	border:1px solid #CBCBCB;
	padding:10px 0px 10px 30px;
	margin:auto;
}
</style>
<div class="centerBox">
<?=$form->create('Maestro', array('action'=>'login')) ?>
<?=$form->input('Maestro.username') ?>
<?=$form->input('Maestro.password') ?>
<?=$form->submit() ?>
<?=$form->end() ?>
* <?php __('If you didn\'t have a permission, please don\'t make it up.')?><br /><br />
</div>