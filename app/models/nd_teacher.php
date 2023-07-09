<?php
class NdTeacher extends AppModel {
    var $name = 'NdTeacher';
	var $useTable = 'nd_teacher';
	var $primaryKey = 'teacher_id';
	var $order = 'NdTeacher.is_valid DESC, NdTeacher.teacher_id DESC';
	var $belongsTo = array(
		'TeacherPosition'=>array('type'=>'left'),
		'Branch'=>array('type'=>'left')
	);
}

?>