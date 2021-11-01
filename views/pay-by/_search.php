<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayBySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pay_by_id') ?>

    <?= $form->field($model, 'pay_by_name') ?>

    <?= $form->field($model, 'cos_id') ?>

    <?= $form->field($model, 'closing_payment_id') ?>

    <?= $form->field($model, 'authorize_cos_change') ?>

    <?php // echo $form->field($model, 'dept_availability') ?>

    <?php // echo $form->field($model, 'item_availability') ?>

    <?php // echo $form->field($model, 'follow_cos') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'check_membership') ?>

    <?php // echo $form->field($model, 'bpjs_online') ?>

    <?php // echo $form->field($model, 'disabled') ?>

    <?php // echo $form->field($model, 'disabled_reason') ?>

    <?php // echo $form->field($model, 'pay_by_group') ?>

    <?php // echo $form->field($model, 'pay_by_group_ext') ?>

    <?php // echo $form->field($model, 'used_by_web_reservation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
