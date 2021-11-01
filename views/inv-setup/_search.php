<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvSetupSearch */
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

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'default_show_transfer') ?>

    <?= $form->field($model, 'count_adjust_in_acc_id') ?>

    <?= $form->field($model, 'count_adjust_out_acc_id') ?>

    <?= $form->field($model, 'adj_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'transfer_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'count_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'default_show_adjustment') ?>

    <?php // echo $form->field($model, 'default_show_count') ?>

    <?php // echo $form->field($model, 'adj_gl_jtype_id') ?>

    <?php // echo $form->field($model, 'default_show_item') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
