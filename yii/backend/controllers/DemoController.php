<?php

namespace backend\controllers;

class DemoController extends \yii\web\Controller
{
	public function actionIndex()
    {
        return $this->render('login');
    }

}
