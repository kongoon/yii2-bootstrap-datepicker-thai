<?php
namespace kongoon\yii2\datepickerthai;

use yii\web\AssetBundle;

class BootstrapDatepicker extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker';

    public $css = [
        'dist/css/bootstrap-datepicker3.css'
    ];

    public $js = [
        'dist/js/bootstrap-datepicker.js',
        'dist/js/locales/bootstrap-datepicker.'.Yii::$app->language.'.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}