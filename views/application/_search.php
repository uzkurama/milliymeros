<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ApplicationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'app_id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'item_name') ?>

    <?php // echo $form->field($model, 'app_desc') ?>

    <?php // echo $form->field($model, 'current_residence') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'app_status') ?>

    <?php // echo $form->field($model, 'client_price') ?>

    <?php // echo $form->field($model, 'expert_price') ?>

    <?php // echo $form->field($model, 'front_img') ?>

    <?php // echo $form->field($model, 'top_img') ?>

    <?php // echo $form->field($model, 'sign_img') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'technique') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'mass_media_source') ?>

    <?php // echo $form->field($model, 'executor_id') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
