<?php

namespace app\controllers;

use Yii;
use app\models\NPreceiptDet;
use app\models\NPreceiptDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NPreceiptDetController implements the CRUD actions for NPreceiptDet model.
 */
class NPreceiptDetController extends Controller
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
     * Lists all NPreceiptDet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NPreceiptDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NPreceiptDet model.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($receipt_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($receipt_id, $seq),
        ]);
    }

    /**
     * Creates a new NPreceiptDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NPreceiptDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receipt_id' => $model->receipt_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NPreceiptDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($receipt_id, $seq)
    {
        $model = $this->findModel($receipt_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receipt_id' => $model->receipt_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NPreceiptDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $receipt_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($receipt_id, $seq)
    {
        $this->findModel($receipt_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NPreceiptDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $receipt_id
     * @param integer $seq
     * @return NPreceiptDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($receipt_id, $seq)
    {
        if (($model = NPreceiptDet::findOne(['receipt_id' => $receipt_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
