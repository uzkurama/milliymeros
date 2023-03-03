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
    <div class="col-md-12">
        <h4><?= 'Shaxsiy ma\'lumotlar' ?></h4>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'name')->textInput(['maxlength' => 255])->label('Ism');?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'surname')->textInput(['maxlength' => 255])->label('Familiya');?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'middle_name')->textInput(['maxlength' => 255])->label('Sharif');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'passport_seria')->textInput(['maxlength' => 2])->label('Pasport seriya');?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'passport_number')->textInput(['type' => 'number'])->label('Pasport raqam');?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'passport_source')->textInput(['maxlength' => 1024])->label('Pasport qayerdan olingan');?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'password')->passwordInput()->label('Parol') ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'password_again')->passwordInput()->label('Parolni tasdiqlang') ?>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'username', [
                        'template' => '{input}<a class="btn btn-secondary" id="send-verify">Jo\'natish</a>{error}{hint}',
                        'options' => ['class' => 'input-group'],
                        'enableClientValidation' => false,
                    ])->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '(99) 999-99-99',
                        'options' => ['placeholder' => 'Telefon raqam'],
                    ]) ?>
                </div>
            <div class="col-md-6" style="display: none;" id="verify-field">
                    <?= $form->field($model, 'verification', [
                        'template' => '<span class="input-group-text" id="timer_clock">
                            <div data-value="minutes"></div>:
                            <div data-value="seconds"></div>
                            </span>{input}<a class="btn btn-outline-secondary" id="check-verify">Tekshirish</a>{error}{hint}',
                        'options' => ['class' => 'input-group'],
                        'enableClientValidation' => false,
                    ])->textInput(['min' => 10000, 'max' => 99999, 'type' => 'number', 'maxlength' => '5']);?>
                    <?= $form->field($model, 'verification_hidden')->hiddenInput()->label(false);?>
            </div>
        </div>
        
        <div class="form-group float-right mt-3">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php
$url_send = \yii\helpers\Url::to(['site/send-verify']);
$url_check = \yii\helpers\Url::to(['site/check-verify']);
$current_time = date('d-M-Y, H:i:s');
$js = <<< JS
var sender;
let phone_number;
let data;
$('#send-verify').on('click', function() {
    phone_number = $('#signupform-username').val();
    if(validate(phone_number) == true){
        sendSms(phone_number);
    }
    else{
        $('#signupform-username').addClass('is-invalid');
        $('.field-signupform-username').children().last().text('');
        $('.field-signupform-username').children().last().text('Telefon raqam noto\'g\'ri kiritilgan');
    }
});

$('#signupform-username').on('change', function() {
    $('#signupform-username').removeClass('is-invalid');
    $('.field-signupform-username').children().last().text('');
});

$('#check-verify').on('click', function() {
    var verify_number = $('#signupform-verification').val();
    var phone_number = $('#signupform-username').val();
    checkVerify(verify_number, phone_number);
});

function validate(phone_number){
    const regex = /\((\d{2})\) \d{3}-\d{2}-\d{2}/g;
    var found = phone_number.match(regex);
    var arr = found || [];
    var res;
    if(arr.length != 0)
    {
        res = true;
    }
    else {
        res = false;
    }
    
    return res;
}

var x;
function timer(deadline){
    x = setInterval(function() {
        var now =new Date(moment().format("D, MMMM YYYY HH:mm:ss"));
        var t = deadline - now;
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("timer_clock").innerHTML = minutes + "m " + seconds + "s ";
    
        if (t < 0) {
            clearInterval(x);
            document.getElementById("timer_clock").innerHTML = "Muddati tugadi";
            $('#send-verify').removeClass('btn-disabled').attr('disabled', false).css({'pointer-events': 'visible'});
        }
    }, 1000);
}
function sendSms(phone_number)
{
    $.ajax({
      type: 'POST',
      url: "$url_send",
      data: {
          phone: phone_number
      },
      success: function(data){ 
          if(data == 'sent')
            {
                $('#send-verify').addClass('btn-disabled').attr('disabled', true).css({'pointer-events': 'none'});
                $('#verify-field').css('display', 'block');
                $('#signupform-username').addClass('is-valid');
                $('.field-signupform-username').children().last().text('');
                $('.field-signupform-username').children().last().text('Ushbu telefon raqamga tasdiqlovchi kod jo\'natildi');
                date = new Date(moment().format("D, MMMM YYYY HH:mm:ss"));
                var deadline = date.setMinutes(date.getMinutes() + 2);
                timer(deadline);
                console.log('ketdi');
                console.log(data);
            }
            else if(data == 'exist'){
                $('#signupform-username').addClass('is-invalid');
                $('.field-signupform-username').children().last().text('');
                $('.field-signupform-username').children().last().text('Ushbu telefon raqam ro\'yxatdan o\'tkazilgan');
                console.log('ketmadi');
                console.log(data);
            }
            else{
                $('#signupform-username').addClass('is-invalid');
                $('.field-signupform-username').children().last().text('');
                $('.field-signupform-verification').children().last().text('Tizimda xatolik mavjud');
                console.log('xz');
            }
      }
    });
}

function checkVerify(verify_number, phone_number){
    $.ajax({
      type: 'POST',
      url: "$url_check",
      data: {
          verify: verify_number,
          phone: phone_number,
      },
      success: function(data){
          if(data == true){
              $('#check-verify').addClass('btn-disabled').attr('disabled', true).css({'pointer-events': 'none'});
              document.getElementById("timer_clock").innerHTML = "Tasdiqlandi";
              $('#signupform-verification_hidden').val($('#signupform-verification').val());
              $('#signupform-verification').attr('disabled', true);
              $('#signupform-verification').addClass('is-valid');
              $('#signupform-verification').removeClass('is-invalid');
              $('.field-signupform-verification').children().last().text('');
              $('#timer_clock').remove();
              clearInterval(x);
          }
          else{
              $('#check-verify').removeClass('btn-disabled').attr('disabled', false).css({'pointer-events': 'visible'});
              $('#signupform-verification').attr('disabled', false);
              $('#signupform-verification').addClass('is-invalid');
              $('.field-signupform-verification').children().last().text('Tasdiqlovchi kod xato');
          }
      }
    });
}
JS;

$this->registerJs($js, \yii\web\View::POS_END);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js', ['position' => \yii\web\View::POS_END]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.40/moment-timezone.min.js', ['position' => \yii\web\View::POS_END]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.40/moment-timezone-with-data.min.js', ['position' => \yii\web\View::POS_END]);
?>
