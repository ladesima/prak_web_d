<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/css/bootstrap.min.css',
        'template/css/bootstrap-icons.css',
        'template/css/templatemo-festava-live.css',
        
    ];
    public $js = [
        'template/js/bootstrap.min.js',
        'template/js/jquery.min.js',
        'template/js/jquery.sticky.js',
        'template/js/custom.js',
        'template/js/click-scroll.js'
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
