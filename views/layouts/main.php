<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/icons/favicon.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<div class="content preloader">
    <div id="inTurnFadingTextG">
        <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">M</div>
        <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">I</div>
        <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">L</div>
        <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">L</div>
        <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">I</div>
        <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">Y</div>
        <div id="inTurnFadingTextG_1" class="inTurnFadingTextG"> </div>
        <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">M</div>
        <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">E</div>
        <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">R</div>
        <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">O</div>
        <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">S</div>
    </div>
</div>
<!-- Preloader -->

<!-- Header  -->
<header class="l-header active t-bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-7 col-lg-3 col-xl-2">
                <div class="brand">
                    <a href="<?= Url::home();?>" class="t-link">
                        <img
                            src="/img/mm_logo.png"
                            alt=""
                            class="img-fluid w-100"
                        />
                    </a>
                </div>
            </div>
            <div class="col-5 col-lg-9 col-xl-7 text-right">
                <div class="zol-menu-wrapper">
                    <div class="zol-menu-toggle d-inline-block d-lg-none">
                        <span class="zol-menu-open">
                            <i class="las la-bars"></i>
                        </span>
                        <span class="zol-menu-close">
                            <i class="las la-times"></i>
                        </span>
                    </div>
                    <ul class="t-list zol-menu">
                        <li class="zol-menu__list">
                            <a href="#" class="t-link zol-menu__link">Sotib olingan ashyolar</a>
                        </li>
                        <li class="zol-menu__list">
                            <a href="<?= Url::to(['site/contact']);?>" class="t-link zol-menu__link">Aloqa uchun</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 d-xl-block">
                <nav>
                <?php if(Yii::$app->user->isGuest):?>
                    <a href="<?= Url::to(['site/login']);?>" class="t-link bttn bttn-sm bttn-round bttn-primary">Kirish</a>
                    <a href="<?= Url::to(['site/signup']);?>" class="t-link bttn bttn-sm bttn-round bttn-gamma">Ro‘yxatdan o‘tish</a>
                <?php else:?>
                    <a href="<?= Url::to(['site/logout']);?>" data-method="post" class="t-link bttn bttn-sm bttn-round">Chiqish</a>
                <?php endif;?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<div class="hero-4 hero-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-7">
                <div class="hero-4__content">
                    <h1 class="text-capitalize">
                        Umumxalq aksiyasiga qatnashing!
                    </h1>
                    <p class="t-text-zeta">
                        Aholidagi madaniy boyliklarni davlat muzeylari tomonidan qabul qilib olish va rag‘batlantirish
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Project Counter  -->
<div class="t-pt-120 t-pb-120 t-bg-light-grad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                <div class="icon-card d-flex ">
                    <div class="icon-card__icon t-mr-16">
                        <img src="/img/icons/1.png" alt="" class="img-fluid">
                    </div>
                    <div class="icon-card__content">
                        <h4 class="mt-0 t-text-primary t-mb-10">
                            348
                        </h4>
                        <span class="t-text-zeta d-block text-uppercase sm-text">
                            Arizalar soni
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                <div class="icon-card d-flex ">
                    <div class="icon-card__icon t-mr-16">
                        <img src="/img/icons/2.png" alt="" class="img-fluid">
                    </div>
                    <div class="icon-card__content">
                        <h4 class="mt-0 t-text-primary t-mb-10">
                            1339
                        </h4>
                        <span class="t-text-zeta d-block text-uppercase sm-text">
                            Xarid qilingan ashyolar
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                <div class="icon-card d-flex ">
                    <div class="icon-card__icon t-mr-16">
                        <img src="/img/icons/3.png" alt="" class="img-fluid">
                    </div>
                    <div class="icon-card__content">
                        <h4 class="mt-0 t-text-primary t-mb-10">
                            258
                        </h4>
                        <span class="t-text-zeta d-block text-uppercase sm-text">
                            Qabul qilinmagan ashyolar
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-card d-flex ">
                    <div class="icon-card__icon t-mr-16">
                        <img src="/img/icons/4.png" alt="" class="img-fluid">
                    </div>
                    <div class="icon-card__content">
                        <h4 class="mt-0 t-text-primary t-mb-10">
                            3 mlrd. so'm
                        </h4>
                        <span class="t-text-zeta d-block text-uppercase sm-text">
                            Rag'batlantirish summasi
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="t-pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-capitalize">
                    Aksiya qanday jarayonda o'tadi
                </h2>
            </div>
        </div>
        <div class="work-process-wrapper">
            <div class="row h-100">
                <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                    <div class="work-process text-center">
                        <div class="work-process-icon work-process-icon--alpha mx-auto">
                            <i class="las la-image"></i>
                        </div>
                        <h4 class="text-capitalize mb-0 t-text-alpha">
                            Siz ariza topshirasiz, arizangiz Madaniy meros agentligi tomonidan ko'rib chiqiladi va sizga uchrashuv belgilanadi (5 ish kuni ichida)
                        </h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0 align-self-xl-center">
                    <div class="work-process text-center">
                        <div class="work-process-icon work-process-icon--primary mx-auto">
                            <i class="las la-calendar"></i>
                        </div>
                        <h4 class="text-capitalize mb-0 t-text-primary">
                            Ashyongiz qabul qilinadi va badiiy ekspertlar kengashi tomonidan 30 ish kuni ichida ko'rib, baholanadi
                        </h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                    <div class="work-process text-center">
                        <div class="work-process-icon work-process-icon--delta mx-auto">
                            <i class="las la-file-signature"></i>
                        </div>
                        <h4 class="text-capitalize mb-0 t-text-delta">
                            Badiiy ekspertlar kengashi xulosasiga asosan siz bilan shartnoma imzolanadi yoki sizning arizangiz rad etiladi.
                        </h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0 align-self-xl-center">
                    <div class="work-process work-process--last text-center">
                        <div class="work-process-icon work-process-icon--epsilon mx-auto">
                            <i class="las la-coins"></i>
                        </div>
                        <h4 class="text-capitalize mb-0 t-text-epsilon">
                            Shartnoma imzolanib ashyo qabul qilinganidan so'ng umumiy summada 15% to'lab beriladi, ashyo muzeyga topshirilgandan keyin qolgan 85% to'lov amalga oshiriladi
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= \app\widgets\NewsWidget::widget();?>

<!-- Back To Top -->
<div class="back-to-top">
    <span class="back-top">
        <i class="las la-angle-up"></i>
    </span>
</div>
<!-- Back To Top End -->

<?= \app\widgets\FooterWidget::widget();?>
<?php \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]); ?>
<?php Yii::$app->session->setFlash('message', 'Sayt alfa-test holatida');?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
