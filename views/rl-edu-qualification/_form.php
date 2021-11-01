<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RlEduQualification */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="rl-edu-qualification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_seq')->textInput() ?>

    <?= $form->field($model, 'edu_qualification_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_qualification_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
