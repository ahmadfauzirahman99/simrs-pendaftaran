<?php

/* @var $this yii\web\View */
/* @var $model app\models\ItemMcuExt */

$this->title = 'Update Item Mcu Ext: ' . $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Mcu Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_id, 'url' => ['view', 'id' => $model->item_id]];
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