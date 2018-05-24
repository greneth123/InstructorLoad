<?php

use yii\helpers\Html;

$this->title = "Coure Instructor";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a course intructor.</span>
<?php else: ?>
        <?= Html::a('Create Course Instructor', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Course_id</th>
        <th>Instructor_id</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>

    <td>
            <?= Html::a($model->id, ['/course_instructor/view', 'id'=>$model->id]); ?>
        </td>
        <td><?= $model->id ?></td>
    </tr>
<?php endforeach; ?>
</table>
