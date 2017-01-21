<?php
namespace app\controllers;

use app\models\Ceshi;
use yii\web\Controller;
class IndexController extends Controller{
    public function actionIndex(){
        $ceshi = Ceshi::find()->asArray()->all();
        echo "数据库数据：<pre>";
        print_r($ceshi);
        echo "</pre>";
        phpinfo();
    }
    public function actionCeshi()
    {
        exit('ceshi123');
    }
}