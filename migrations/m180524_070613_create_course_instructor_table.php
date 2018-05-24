<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course_instructor`.
 */
class m180524_070613_create_course_instructor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course_instructor', [
            'id' => $this->primaryKey(),
            'course_id' => $this->integer(10)->notNull(),
            'instructor_id' => $this->integer(10)->notNull()
        ]);
        $this->createIndex('idx-course_instructor-course_id', 'course_instructor', 'course_id');
        $this->addForeignKey('fk-course_instructor-course',
        'course_instructor',
        'course_id',
        'course','id');

        $this->createIndex('idx-course_instructor-instructor_id', 'course_instructor', 'instructor_id');
        $this->addForeignKey('fk-course_instructor-instructor',
         'course_instructor',
         'instructor_id',
         'instructor','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-course_instructor-course','course_instructor');
        $this->dropForeignKey('fk-course_instructor-instructor','course_instructor');
        $this->dropIndex('idx-course_instructor-course_id','course_instructor');
        $this->dropIndex('idx-course_instructor-instructor_id','course_instructor');
        $this->dropTable('course_instructor');
    }
}

