<?php

use yii\helpers\Html;

$this->title = 'Create Instructor';
$this->params['breadcrumbs'][] = ['label' => 'instructor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
