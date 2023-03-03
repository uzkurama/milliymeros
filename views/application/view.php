<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Application $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="application-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'app_id',
            'created_at',
            'updated_at',
            'region_id',
            'item_name:ntext',
            'app_desc:ntext',
            'current_residence:ntext',
            'count',
            'app_status',
            'client_price',
            'expert_price',
            'front_img',
            'top_img',
            'sign_img',
            'created_date',
            'technique:ntext',
            'size',
            'mass_media_source:ntext',
            'executor_id',
            'author',
        ],
    ]) ?>

</div>
