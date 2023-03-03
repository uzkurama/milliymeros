<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'app_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'app_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'current_residence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'app_status')->textInput() ?>

    <?= $form->field($model, 'client_price')->textInput() ?>

    <?= $form->field($model, 'expert_price')->textInput() ?>

    <?= $form->field($model, 'front_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'top_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sign_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'technique')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mass_media_source')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'executor_id')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
