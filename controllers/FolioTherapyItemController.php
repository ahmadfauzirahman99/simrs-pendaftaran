<?php

namespace app\controllers;

use Yii;
use app\models\FolioTherapyItem;
use app\models\FolioTherapyItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FolioTherapyItemController implements the CRUD actions for FolioTherapyItem model.
 */
class FolioTherapyItemController extends Controller
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
     * Lists all FolioTherapyItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FolioTherapyItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FolioTherapyItem model.
     * @param integer $folio_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($folio_id, $seq)
    {
        return $this->render('view', [
            'model' => $this->findModel($folio_id, $seq),
        ]);
    }

    /**
     * Creates a new FolioTherapyItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FolioTherapyItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FolioTherapyItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $folio_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($folio_id, $seq)
    {
        $model = $this->findModel($folio_id, $seq);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FolioTherapyItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $folio_id
     * @param integer $seq
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($folio_id, $seq)
    {
        $this->findModel($folio_id, $seq)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FolioTherapyItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $folio_id
     * @param integer $seq
     * @return FolioTherapyItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($folio_id, $seq)
    {
        if (($model = FolioTherapyItem::findOne(['folio_id' => $folio_id, 'seq' => $seq])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
