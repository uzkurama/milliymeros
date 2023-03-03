<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User2 $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user2-view">

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
            'username',
            'name',
            'surname',
            'middle_name',
            'passport_seria',
            'passport_number',
            'passport_source:ntext',
            'auth_key',
            'verification_token',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'role',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
