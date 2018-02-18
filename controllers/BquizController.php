<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\bnoises;
class BquizController extends Controller
{
public function actionIndex(){
    $query = bnoises::find()->all();
return $this->render('bquiz',['bnoises' => $query,]);
}
}
?>