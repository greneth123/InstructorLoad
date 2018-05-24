<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Course;
use app\models\Instructor;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
?>

<div class="course_instructor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->dropDownList(ArrayHelper::map(
        Course::find()->asArray()->all(), 'id','id'))?>

   <?= $form->field($model, 'instructor_id')->dropDownList(ArrayHelper::map(
        Instructor::find()->asArray()->all(), 'id','id'))?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>