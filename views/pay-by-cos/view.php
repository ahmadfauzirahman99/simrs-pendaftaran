<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PayByCos */

$this->title = $model->pay_by_id;
$this->params['breadcrumbs'][] = ['label' => 'Pay By Cos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'pay_by_id' => $model->pay_by_id, 'dept_id' => $model->dept_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'pay_by_id' => $model->pay_by_id, 'dept_id' => $model->dept_id], [
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
                            'pay_by_id',
                            'dept_id',
                            'cos_id',
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