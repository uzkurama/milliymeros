<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Aloqa uchun';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="t-pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-4 t-mb-30 mb-md-0">
                <div class="cards border">
                    <div class="cards__img mx-auto text-center">
                        <img src="/img/contact-icon-1.png" alt="zolfin" class="img-fluid">
                    </div>
                    <div class="cards__body text-center">
                        <h4 class="text-capitalize cards__body-title">
                            Manzil
                        </h4>
                        <p class="mb-0 t-text-heading">
                            Toshkent shahar, Yunusobod tumani, Amir Temur 107B
                        </p>
                    </div>
                    <div class="cards__footer text-center t-mt-30">
                        <a target="_blank" href="https://yandex.uz/maps/10335/tashkent/?ll=69.282200%2C41.337450&mode=whatshere&whatshere%5Bpoint%5D=69.282647%2C41.337079&whatshere%5Bzoom%5D=19&z=19" class="t-link t-link--alpha">
                            <span class="cards__footer-icon">
                                <i class="las la-plus-circle"></i>
                            </span>
                            <span class="text-capitalize font-weight-bold">
                                Joylashuv
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 t-mb-30 mb-md-0">
                <div class="cards border">
                    <div class="cards__img mx-auto text-center">
                        <img src="/img/contact-icon-2.png" alt="zolfin" class="img-fluid">
                    </div>
                    <div class="cards__body text-center">
                        <h4 class="text-capitalize cards__body-title">
                            Ish kunlari
                        </h4>
                        <p class="mb-0 t-text-heading">
                            Dushanbadan-Jumagacha: 09:00-18:00
                            <br>
                            Shanba-Yakshanba va bayram kunlari: Dam olish kuni
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 t-mb-30 mb-md-0">
                <div class="cards border">
                    <div class="cards__img mx-auto text-center">
                        <img src="/img/contact-icon-1.png" alt="zolfin" class="img-fluid">
                    </div>
                    <div class="cards__body text-center">
                        <h4 class="text-capitalize cards__body-title">
                            Tezkor aloqa
                        </h4>
                        <p class="mb-0 t-text-heading">
                            +998 71 205 06 00
                            <br>
                            info@madaniymeros.uz
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.5333072420738!2d69.2818285217766!3d41.337311672760116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b11d89b0367%3A0x51142a231734d8ae!2sUzbektourism!5e0!3m2!1sru!2s!4v1672314795385!5m2!1sru!2s" width="auto" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>