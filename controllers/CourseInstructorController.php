<?php

namespace app\controllers;
use app\models\User;
use yii;
use yii\filters\VerbFilter;
use app\models\AccessRule;
use yii\filters\AccessControl;
use app\models\CourseInstructor;

class CourseInstructorController extends \yii\web\Controller
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
        $model = new CourseInstructor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        CourseInstructor::findOne($id)->delete();
        return $this->redirect('/courseinstructor/index');
    }

    public function actionIndex()
    {
        $model = CourseInstructor::find()->orderBy('id')->all();

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = CourseInstructor::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = CourseInstructor::findOne($id);
        return $this->render('view', compact('model'));
    }

}
