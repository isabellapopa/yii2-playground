<?php

namespace frontend\modules\example\controllers;

use Yii;
use \yii\web\Controller;

class   SiteController extends Controller
{
    public function actionExample()
    {
        die('test ok - module has been loaded!');
        return $this->render('example');
    }

}