<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'admin_asset/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'admin_asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'admin_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'admin_asset/plugins/jqvmap/jqvmap.min.css',
        'admin_asset/dist/css/adminlte.min.css',
        'admin_asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'admin_asset/plugins/daterangepicker/daterangepicker.css',
        'admin_asset/plugins/summernote/summernote-bs4.min.css',
        'admin_asset/dist/css/custom.css',
    ];
    public $js = [
        'admin_asset/plugins/jquery-ui/jquery-ui.min.js',
        'admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'admin_asset/plugins/chart.js/Chart.min.js',
        'admin_asset/plugins/sparklines/sparkline.js',
        'admin_asset/plugins/jqvmap/jquery.vmap.min.js',
        'admin_asset/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'admin_asset/plugins/jquery-knob/jquery.knob.min.js',
        'admin_asset/plugins/moment/moment.min.js',
        'admin_asset/plugins/daterangepicker/daterangepicker.js',
        'admin_asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'admin_asset/plugins/summernote/summernote-bs4.min.js',
        'admin_asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'admin_asset/dist/js/adminlte.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
