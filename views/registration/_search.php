<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationSearch */
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

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'registration_no') ?>

    <?= $form->field($model, 'registration_date') ?>

    <?= $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'contact_seq_pay') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'pay_by_amount') ?>

    <?php // echo $form->field($model, 'self_amount') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'owing_pay_by') ?>

    <?php // echo $form->field($model, 'owing_self') ?>

    <?php // echo $form->field($model, 'first_folio_id') ?>

    <?php // echo $form->field($model, 'refer_no') ?>

    <?php // echo $form->field($model, 'refer_from_no') ?>

    <?php // echo $form->field($model, 'refer_from_date') ?>

    <?php // echo $form->field($model, 'refer_from_doctor') ?>

    <?php // echo $form->field($model, 'refer_from_hospital') ?>

    <?php // echo $form->field($model, 'refer_from_diagnose_code') ?>

    <?php // echo $form->field($model, 'refer_from_diagnose') ?>

    <?php // echo $form->field($model, 'refer_from_cause') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'excess_by_patient') ?>

    <?php // echo $form->field($model, 'ref_type_id') ?>

    <?php // echo $form->field($model, 'q_number') ?>

    <?php // echo $form->field($model, 'reservation_date') ?>

    <?php // echo $form->field($model, 'main_folio_id') ?>

    <?php // echo $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'status_patient') ?>

    <?php // echo $form->field($model, 'bpjs_verified_by') ?>

    <?php // echo $form->field($model, 'bpjs_verfied_time') ?>

    <?php // echo $form->field($model, 'reg_bpjs_verified_by') ?>

    <?php // echo $form->field($model, 'reg_bpjs_verified_time') ?>

    <?php // echo $form->field($model, 'reg_bpjs_discharge_by') ?>

    <?php // echo $form->field($model, 'reg_bpjs_discharge_time') ?>

    <?php // echo $form->field($model, 'reg_bpjs_discharge_notes') ?>

    <?php // echo $form->field($model, 'apotik_id') ?>

    <?php // echo $form->field($model, 'reg_end_date') ?>

    <?php // echo $form->field($model, 'new_reg') ?>

    <?php // echo $form->field($model, 'main_dept_id') ?>

    <?php // echo $form->field($model, 'aproval_ffs_is') ?>

    <?php // echo $form->field($model, 'sep_no') ?>

    <?php // echo $form->field($model, 'episode') ?>

    <?php // echo $form->field($model, 'ffs_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
