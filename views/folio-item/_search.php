<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioItemSearch */
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

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'disc_pc') ?>

    <?php // echo $form->field($model, 'disc_amount') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'other_remark') ?>

    <?php // echo $form->field($model, 'self_amount') ?>

    <?php // echo $form->field($model, 'pay_by_amount') ?>

    <?php // echo $form->field($model, 'compulsory') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'uom_conversion') ?>

    <?php // echo $form->field($model, 'tax1_amount') ?>

    <?php // echo $form->field($model, 'tax2_amount') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'add_discount') ?>

    <?php // echo $form->field($model, 'dosage') ?>

    <?php // echo $form->field($model, 'staff_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>