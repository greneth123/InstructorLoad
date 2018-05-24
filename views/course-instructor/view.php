<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Course Instructor: $model->id";
$this->params['breadcrumbs'][] = ['label'=>'halls', 'url'=>['/course_instructor/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id=>' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this course instructor?',
            'method' => 'post',
        ],
    ]) ?>
</p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'course_id',
        'instructor_id',
    ]
]);
