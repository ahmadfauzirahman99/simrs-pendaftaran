<?php

/* @var $this yii\web\View */
/* @var $model app\models\RefGroupExt */

$this->title = 'Update Ref Group Ext: ' . $model->ref_group_id;
$this->params['breadcrumbs'][] = ['label' => 'Ref Group Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ref_group_id, 'url' => ['view', 'id' => $model->ref_group_id]];
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