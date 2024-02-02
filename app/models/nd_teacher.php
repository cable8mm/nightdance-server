<?php

class NdTeacher extends AppModel
{
    public $name = 'NdTeacher';

    public $useTable = 'nd_teacher';

    public $primaryKey = 'teacher_id';

    public $order = 'NdTeacher.is_valid DESC, NdTeacher.teacher_id DESC';

    public $belongsTo = [
        'TeacherPosition' => ['type' => 'left'],
        'Branch' => ['type' => 'left'],
    ];
}
