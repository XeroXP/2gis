<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '//fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400&subset=latin,cyrillic',
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
