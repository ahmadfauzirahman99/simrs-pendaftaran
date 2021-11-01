<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExtBillNo */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ext-bill-no-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bill')->textInput() ?>

    <?= $form->field($model, 'name_bill')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
