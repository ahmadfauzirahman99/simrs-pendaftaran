<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NPorderSearch */
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

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'order_no') ?>

    <?= $form->field($model, 'order_date') ?>

    <?= $form->field($model, 'req_received_date') ?>

    <?php // echo $form->field($model, 'term_payment') ?>

    <?php // echo $form->field($model, 'carrier_id') ?>

    <?php // echo $form->field($model, 'ordered_by') ?>

    <?php // echo $form->field($model, 'warehouse_id') ?>

    <?php // echo $form->field($model, 'order_status') ?>

    <?php // echo $form->field($model, 'printed') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'items_net_amount') ?>

    <?php // echo $form->field($model, 'order_amount') ?>

    <?php // echo $form->field($model, 'tax1_id') ?>

    <?php // echo $form->field($model, 'tax2_id') ?>

    <?php // echo $form->field($model, 'tax1_rate') ?>

    <?php // echo $form->field($model, 'tax2_rate') ?>

    <?php // echo $form->field($model, 'tax1_amount') ?>

    <?php // echo $form->field($model, 'tax2_amount') ?>

    <?php // echo $form->field($model, 'taxable_tax1_id') ?>

    <?php // echo $form->field($model, 'taxable_tax2_id') ?>

    <?php // echo $form->field($model, 'taxable_tax3_id') ?>

    <?php // echo $form->field($model, 'taxable_amount1') ?>

    <?php // echo $form->field($model, 'taxable_amount2') ?>

    <?php // echo $form->field($model, 'taxable_amount3') ?>

    <?php // echo $form->field($model, 'order_disc_pc') ?>

    <?php // echo $form->field($model, 'order_disc_amount') ?>

    <?php // echo $form->field($model, 'shipto') ?>

    <?php // echo $form->field($model, 'shipto_name') ?>

    <?php // echo $form->field($model, 'shipto_address') ?>

    <?php // echo $form->field($model, 'num_of_receipts') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'ap_invoice_id') ?>

    <?php // echo $form->field($model, 'items_received') ?>

    <?php // echo $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'paid') ?>

    <?php // echo $form->field($model, 'ap_invoice_no') ?>

    <?php // echo $form->field($model, 'bank_id') ?>

    <?php // echo $form->field($model, 'request_id') ?>

    <?php // echo $form->field($model, 'request_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>