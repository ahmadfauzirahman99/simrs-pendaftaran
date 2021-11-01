<?php

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiPatientXt */

$this->title = 'Update Okupasi Patient Xt: ' . $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Okupasi Patient Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_id, 'url' => ['view', 'id' => $model->patient_id]];
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