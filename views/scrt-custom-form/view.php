<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtCustomForm */

$this->title = $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Custom Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'policy_id' => $model->policy_id, 'custom_form_id' => $model->custom_form_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'policy_id' => $model->policy_id, 'custom_form_id' => $model->custom_form_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'policy_id',
                            'custom_form_id',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>