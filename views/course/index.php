<?php

use yii\helpers\Html;

$this->title = "Course";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a course.</span>
<?php else: ?>
        <?= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Credits</th>
        <th>Department</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>

    <td>
            <?= Html::a($model->title, ['/course/view', 'id'=>$model->id]); ?>

        </td>
        <td><?= $model->credits ?></td>
        <td><?= $model->department ?></td>
    </tr>
<?php endforeach; ?>
</table>
