<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Yii Example</title>
    <?php $this->head() ?>
</head>
<body>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => ['/example'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItem = ['label' => 'Example', 'url' => ['/site/example']];


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [$menuItem],
    ]);
    NavBar::end();
    ?>
    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
