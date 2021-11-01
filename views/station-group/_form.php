<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StationGroup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="station-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_group_id')->textInput() ?>

    <?= $form->field($model, 'station_group')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
