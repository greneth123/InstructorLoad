<?php

namespace app\controllers;
use yii;
use app\models\Course;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class CourseController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => [User::ROLE_ADMIN]
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                'delete' => ['POST'],
                ],
            ],


        ];
    }

    public function actionCreate()
    {
        $model = new Course();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete()
    {
        $course = Course::findOne($id);


        $command = Yii::$app->db->createCommand("DELETE FROM course_instructor WHERE course_id=:id");
        $command->bindValue(':id',$id);
        $command->execute();

        $course->delete();

        return $this->redirect(['course/index']);
    }

    public function actionIndex()
    {
        $model = Course::find()->orderBy('id')->all();

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = Course::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Course::findOne($id);
        return $this->render('view', compact('model'));
    }

}
