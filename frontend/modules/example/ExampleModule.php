<?php
/**
 * Created by PhpStorm.
 * User: ew2
 * Date: 8/20/2015
 * Time: 2:39 PM
 */
namespace frontend\modules\example;

use Yii;
use \yii\base\Module;

class ExampleModule extends Module{
    public $controllerNamespace = 'frontend\modules\example\controllers';
    public $defaultController = 'site';
    public $defaultRoute = 'site';
    public $layout = "main";
    public function init()
    {
        parent::init();

        $this->setLayoutPath(__DIR__."/views/layouts");
    }
}