<?php

/* @var $this yii\web\View */
/* @var $model app\models\CustomerItemPrice */

$this->title = 'Update Customer Item Price: ' . $model->customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Item Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_id, 'url' => ['view', 'customer_id' => $model->customer_id, 'seq' => $model->seq]];
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