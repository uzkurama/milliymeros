<?php

use app\models\Application;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ApplicationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Arizalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Filter</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <?= $this->render('_search', ['model' => $searchModel]); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title;?></h3>
            </div>
            <div class="card-body">
                <p>
                    <?= Html::a('Kiritish', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <div class="table-responsive">
                    <?= GridView::widget([
                        'pager' => [
                            'class' => \yii\bootstrap5\LinkPager::class,
                        ],
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'user_id',
                            'app_id',
                            'created_at',
                            'updated_at',
                            //'region_id',
                            //'item_name:ntext',
                            //'app_desc:ntext',
                            //'current_residence:ntext',
                            //'count',
                            //'app_status',
                            //'client_price',
                            //'expert_price',
                            //'front_img',
                            //'top_img',
                            //'sign_img',
                            //'created_date',
                            //'technique:ntext',
                            //'size',
                            //'mass_media_source:ntext',
                            //'executor_id',
                            //'author',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, Application $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                 }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
