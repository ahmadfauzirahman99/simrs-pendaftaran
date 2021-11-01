<?php

/* @var $this yii\web\View */
/* @var $model app\models\ReportParam */

$this->title = 'Update Report Param: ' . $model->report_id;
$this->params['breadcrumbs'][] = ['label' => 'Report Params', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->report_id, 'url' => ['view', 'report_id' => $model->report_id, 'param_id' => $model->param_id]];
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