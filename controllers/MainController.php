<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = 'Привет мой сайт )';
        return $this->render(
            'index',
        [
            'hello' => $hello
        ]);
    }

}
