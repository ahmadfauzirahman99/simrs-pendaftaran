<?php

/* @var $this yii\web\View */
/* @var $model app\models\ScrtUserAlert */

$this->title = 'Update Scrt User Alert: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt User Alerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'alert_id' => $model->alert_id]];
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