<?php

use yii\helpers\Html;

$this->title = 'Create Course';
$this->params['breadcrumbs'][] = ['label' => 'course', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>

