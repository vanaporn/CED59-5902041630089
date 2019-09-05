<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $data = 'data test';
        return $this->render('index',[
            'xdata' => $data
        ]);
            
    }

    public function actionTest(){
        echo 'test';
        return $this->render('test');
    }
}
