<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author forecho <caizhenghai@gmail.com>
 */
class BowerAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
    	'bootstrap/dist/js/bootstrap.min.js',
    ];
}
