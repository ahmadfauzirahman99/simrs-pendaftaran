<?php

/* @var $this yii\web\View */
/* @var $model app\models\ApInvOther */

$this->title = 'Update Ap Inv Other: ' . $model->invoice_id;
$this->params['breadcrumbs'][] = ['label' => 'Ap Inv Others', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->invoice_id, 'url' => ['view', 'invoice_id' => $model->invoice_id, 'seq' => $model->seq]];
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