<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class SlideAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/slide';
    public $css = ['js-image-slider.css'];
    public $js = ['js-image-slider.js'];
  //  public $depends = ['app\\assets\\AppAsset'];
}