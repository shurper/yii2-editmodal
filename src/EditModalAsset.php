<?php

namespace floor12\editmodal;

use yii\web\AssetBundle;

class EditModalAsset extends AssetBundle
{
    public $sourcePath = '@vendor/shurper/yii2-editmodal/assets/';
    public $css = [
        'editmodal.css'
    ];
    public $js = [
        'editmodal.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'floor12\notification\NotificationAsset',
    ];

}
