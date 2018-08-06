<?php
namespace kongoon\yii2\datepickerthai;

use yii\web\AssetBundle;
use Yii;

class BootstrapDatepickerThai extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker-thai';

    public $css = [
        'css/datepicker.css'
    ];

    public $js = [
        'js/bootstrap-datepicker.js',
        'js/locales/bootstrap-datepicker.'.Yii::$app->language.'.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}