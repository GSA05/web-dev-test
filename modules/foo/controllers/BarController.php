<?php

namespace app\modules\foo\controllers;

class BarController extends \yii\web\Controller
{
    public function actionUpdate()
    {
        return $this->render('update');
    }

}
