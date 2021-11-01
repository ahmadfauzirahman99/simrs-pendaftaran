<?php

/* @var $this yii\web\View */
/* @var $model app\models\QTrans2 */

$this->title = 'Update Q Trans2: ' . $model->q_trans_id;
$this->params['breadcrumbs'][] = ['label' => 'Q Trans2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->q_trans_id, 'url' => ['view', 'id' => $model->q_trans_id]];
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