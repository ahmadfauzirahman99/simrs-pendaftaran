<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RlInPatientServiceType */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="rl-in-patient-service-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'server_id')->textInput() ?>

    <?= $form->field($model, 'server_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
