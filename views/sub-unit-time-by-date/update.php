<?php

/* @var $this yii\web\View */
/* @var $model app\models\SubUnitTimeByDate */

$this->title = 'Update Sub Unit Time By Date: ' . $model->sub_unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Unit Time By Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_unit_id, 'url' => ['view', 'sub_unit_id' => $model->sub_unit_id, 'seq' => $model->seq]];
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