<?php

use yii\helpers\Html;

$this->title = "Instructor";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a instructor.</span>
<?php else: ?>
        <?= Html::a('Create Instructor', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Hiredate</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>

    <td>
            <?= Html::a($model->lastname, ['/instructor/view', 'id'=>$model->id]); ?>
        </td>
        <td><?= $model->credits ?></td>
    </tr>
<?php endforeach; ?>
</table>
