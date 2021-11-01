<?php

/* @var $this yii\web\View */
/* @var $model app\models\NItemGroup */

$this->title = 'Update N Item Group: ' . $model->item_group_id;
$this->params['breadcrumbs'][] = ['label' => 'N Item Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_group_id, 'url' => ['view', 'id' => $model->item_group_id]];
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