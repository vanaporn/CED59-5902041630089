<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
<<<<<<< HEAD
        echo 'test';
=======
        $data = 'data test';
        return $this->render('index',[
            'xdata' => $data
        ]);
            
    }

    public function actionTest(){
        echo 'test';
        return $this->render('test');
>>>>>>> eaa6255d0f00285c88ddf0b5a08c1f0b375412fd
    }
}
