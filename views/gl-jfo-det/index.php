<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GlJfoDetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gl Jfo Dets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Gl Jfo Det', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'journal_id',
                            'seq',
                            'account_id',
                            'location_id',
                            'currency_id',
                            //'foreign_amount',
                            //'exchange_rate',
                            //'department_id',
                            //'description',
                            //'amount',
                            //'item_id',
                            //'item_mtl_id',
                            //'item_kits_id',
                            //'folio_id',
                            //'folio_seq',
                            //'folio_mtl_seq',
                            //'folio_kits_seq',
                            //'folio_line_amount',
                            //'tax1_id',
                            //'tax1_amount',
                            //'tax2_id',
                            //'tax2_amount',
                            //'posted',
                            //'processed',

                            ['class' => 'hail812\adminlte3\yii\grid\ActionColumn'],
                        ],
                        'summaryOptions' => ['class' => 'summary mb-2'],
                        'pager' => [
                            'class' => 'yii\bootstrap4\LinkPager',
                        ]
                    ]); ?>

                    <?php Pjax::end(); ?>

                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <!--.col-md-12-->
    </div>
    <!--.row-->
</div>
