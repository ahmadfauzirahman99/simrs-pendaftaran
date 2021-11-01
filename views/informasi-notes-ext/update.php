<?php

/* @var $this yii\web\View */
/* @var $model app\models\InformasiNotesExt */

$this->title = 'Update Informasi Notes Ext: ' . $model->informasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Informasi Notes Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->informasi_id, 'url' => ['view', 'id' => $model->informasi_id]];
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