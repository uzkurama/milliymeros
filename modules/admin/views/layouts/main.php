<?php

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AdminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= Yii::$app->homeUrl;?>/admin" class="brand-link">
        <img src="/img/icons/favicon.png" alt="" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Boshqaruv panel</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <?= Nav::widget([
                'options' => ['class' => 'nav-pills nav-sidebar flex-column'],
                'encodeLabels' => false,
                'items' => [
                    ['label' => Html::tag('i', '', ['class' => 'nav-icon fas fa-home']).Html::tag('p', 'Bosh sahifa'), 'url' => ['/admin/default/index']],
                    ['label' => Html::tag('i', '', ['class' => 'nav-icon fas fa-folder']).Html::tag('p', 'Arizalar'), 'url' => ['/admin/application/index']],
                    ['label' => Html::tag('i', '', ['class' => 'nav-icon fas fa-users']).Html::tag('p', 'Foydalanuvchilar'), 'url' => ['/admin/user/index']],
                ]
            ]);?>
<!--            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">-->
<!--                <li class="nav-item menu-open">-->
<!--                    <a href="#" class="nav-link active">-->
<!--                        <i class="nav-icon fas fa-tachometer-alt"></i>-->
<!--                        <p>Bosh sahifa<i class="right fas fa-angle-left"></i></p>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </nav>
    </div>
</aside>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $this->title;?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?php if (!empty($this->params['breadcrumbs'])): ?>
                        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs'], 'options' => ['class' => 'float-sm-right']]) ?>
                    <?php endif ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
          <?= $content;?>
      </div>
    </section>
</div>

<?php

$js = <<< JS
$.widget.bridge('uibutton', $.ui.button);
JS;

$this->registerJs($js, \yii\web\View::POS_END);

?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
