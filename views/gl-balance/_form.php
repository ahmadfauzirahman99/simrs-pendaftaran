<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlBalance */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-balance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'opening_bal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period12')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
