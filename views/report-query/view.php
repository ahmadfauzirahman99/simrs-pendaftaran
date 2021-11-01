<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReportQuery */

$this->title = $model->report_id;
$this->params['breadcrumbs'][] = ['label' => 'Report Queries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'report_id' => $model->report_id, 'query_id' => $model->query_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'report_id' => $model->report_id, 'query_id' => $model->query_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'report_id',
                            'query_id',
                            'query_name',
                            'sql_syntax:ntext',
                            'master_query_id',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>