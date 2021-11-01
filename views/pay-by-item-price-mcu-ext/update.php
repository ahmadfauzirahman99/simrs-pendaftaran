<?php

/* @var $this yii\web\View */
/* @var $model app\models\PayByItemPriceMcuExt */

$this->title = 'Update Pay By Item Price Mcu Ext: ' . $model->pay_by_id;
$this->params['breadcrumbs'][] = ['label' => 'Pay By Item Price Mcu Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_by_id, 'url' => ['view', 'pay_by_id' => $model->pay_by_id, 'seq' => $model->seq]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?=$this->render('_form', [
                        'model' => $model
                    ]) ?>
                </div>
            </div>
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>