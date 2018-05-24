<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course`.
 */
class m180524_061925_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(255)->notNull(),
            'credits' =>$this->string(255)->notNull(),
            'department' =>$this->string(10)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('course');
    }
}
