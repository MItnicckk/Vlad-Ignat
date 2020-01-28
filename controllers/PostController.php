<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest(){
        $this -> layout = 'basic';
        return $this -> render('test');
    }

    public function actionIndex(){
        return $this -> render('index');
    }


}