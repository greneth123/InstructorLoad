<?php

use yii\helpers\Html;

$this->title = 'Create Course Instructor';
$this->params['breadcrumbs'][] = ['label' => 'course_instructor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course_instructor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>