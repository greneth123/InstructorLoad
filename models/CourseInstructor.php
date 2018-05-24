<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course_instructor".
 *
 * @property int $id
 * @property string $course_id
 * @property string $instructor_id
 */
class CourseInstructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course_instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id', 'instructor_id'], 'required'],
            [['course_id', 'instructor_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'instructor_id' => 'Instructor ID',
        ];
    }
}
