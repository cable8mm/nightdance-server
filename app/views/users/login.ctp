<style>
#content DIV.centerBox {
	width:400px; height:400px;
	border:1px solid #CBCBCB;
	padding:10px 0px 10px 30px;
	margin:auto;
}
</style>
<div class="centerBox">
<?=$html->image(Configure::read('Settings.logo-small'))?>
<?=$form->create('User', array('action'=>'login')) ?>
<?=$form->input('username', array('label'=>__('ID', true))) ?>
<?=$form->input('password', array('type'=>'password','label'=>__('Password', true))) ?>
<?=$form->submit() ?>
<?=$form->end() ?>
* <?php __('If you didn\'t have a permission, please don\'t make it up.')?><br /><br />
</div>