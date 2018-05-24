<?php

use yii\helpers\Html;

$this->title = "Update Instructor: $model->title";
$this->params['breadcrumbs'][] = ['label' => 'course', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instructor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <? $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>