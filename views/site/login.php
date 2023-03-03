<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Tizimga kirish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <h3><?= Html::encode($this->title) ?></h3>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
        ]); ?>

            <?= $form->field($model, 'username')->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '(99) 999-99-99',
            ])->label('Telefon raqam') ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Parol') ?>

            <?= $form->field($model, 'rememberMe')->checkbox()->label('Eslab qolish') ?>

            <div class="form-group">
                <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
