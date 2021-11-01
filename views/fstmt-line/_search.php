<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FstmtLineSearch */
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

    <?= $form->field($model, 'stmt_id') ?>

    <?= $form->field($model, 'line_seq') ?>

    <?= $form->field($model, 'line_no') ?>

    <?= $form->field($model, 'line_description') ?>

    <?= $form->field($model, 'line_type') ?>

    <?php // echo $form->field($model, 'parent_line_seq') ?>

    <?php // echo $form->field($model, 'reverse') ?>

    <?php // echo $form->field($model, 'get_bal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
