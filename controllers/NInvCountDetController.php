<?php

namespace app\controllers;

use Yii;
use app\models\NInvCountDet;
use app\models\NInvCountDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NInvCountDetController implements the CRUD actions for NInvCountDet model.
 */
class NInvCountDetController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all NInvCountDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NInvCountDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NInvCountDet model.
     * @param integer $count_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($count_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($count_id, $seq),
        ]);
    }

    /**
     * Creates a new NInvCountDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NInvCountDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'count_id' => $model->count_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NInvCountDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $count_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($count_id, $seq)
    {
        $model = $this->findModel($count_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'count_id' => $model->count_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NInvCountDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $count_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($count_id, $seq)
    {
        $this->findModel($count_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NInvCountDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $count_id
     * @param integer $seq
     * @return NInvCountDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($count_id, $seq)
    {
        if (($model = NInvCountDet::findOne(['count_id' => $count_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
