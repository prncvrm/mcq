<?php
namespace app\controllers;
use yii\web\Controller;
class BquizController extends Controller
{
public function actionIndex(){
return $this->render('bquiz');
}
public function actionHelloWorld(){
return "Hello world!";
}
}
?>