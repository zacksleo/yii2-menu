<?php 
namespace zacksleo\menu;

use yii\web\AssetBundle;

class MenuAsset extends AssetBundle{
    public $sourcePath = '@vendor/zacksleo/yii2-menu/assets';
    public $baseUrl = '@web';
    public $js = [
        'js/Sortable.min.js',
        'js/menu.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
