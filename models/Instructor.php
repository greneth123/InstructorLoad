<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $hiredate
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'hiredate'], 'required'],
            [['lastname', 'firstname', 'hiredate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'hiredate' => 'Hiredate',
        ];
    }
}
