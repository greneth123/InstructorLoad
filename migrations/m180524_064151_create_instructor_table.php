<?php

use yii\db\Migration;

/**
 * Handles the creation of table `instructor`.
 */
class m180524_064151_create_instructor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('instructor', [
            'id' => $this->primaryKey(),
            'lastname' =>$this->string(255)->notNull(),
            'firstname' =>$this->string(255)->notNull(),
            'hiredate' =>$this->date('DATE')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('instructor');
    }
}
