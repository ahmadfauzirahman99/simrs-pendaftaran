<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrNotes */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="emr-notes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'notes_id')->textInput() ?>

    <?= $form->field($model, 'notes_type')->textInput() ?>

    <?= $form->field($model, 'notes_format_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_format_descr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
