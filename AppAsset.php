<?php

namespace app;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/static';
    public $baseUrl = '@web/static';
    public $css = [

    ];
    public $js = [

    ];
    //依赖包
    public $depends = [
        //这里写你的依赖包即可，没有别写
        //'yii\web\YiiAsset',//*JS依赖包
        //'yii\bootstrap\BootstrapAsset',//CSS依赖包
    ];

    //导入当前页的功能js文件，注意加载顺序，这个应该最后调用
    public static function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'app\AppAsset']);
    }
    //导入当前页的功能css文件，注意加载顺序，这个应该最后调用
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'app\AppAsset']);
    }

    //导入编辑器
    public static function addCkeditor($view) {
        //$view->registerJsFile('/public/js/utility/ckeditor/ckeditor.js', [AppAsset::className(), 'depends' => 'app\AppAsset']);
    }

}
