<?php

/* @var $this yii\web\View */
/* @var $model app\models\FolioStaffHistory */

$this->title = 'Update Folio Staff History: ' . $model->history_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Staff Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->history_id, 'url' => ['view', 'id' => $model->history_id]];
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