<?php
use app\assets\AppAssetCOPY;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

AppAssetCOPY::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Articles', 'url' => ['/post/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
//        ['label' => 'Лабораторные', 'url' => ['/site/info'],
//            'items' => [
//                ['label' => 'Информация', 'url' => ['/site/info']],
//                ['label' => 'Лаба 1', 'url' => ['/site/lab1']],
//                ['label' => 'Лаба 2', 'url' => ['/db-working/index']],
//                ['label' => 'Лаба 3', 'url' => ['/admin']],
//            ]
//        ],


        Yii::$app->user->isGuest ? (
        ['label' => 'Login', 'url' => ['/site/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )
    ],
]);
NavBar::end();
?>



    <div calss="wrap">
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= html::a('Редактировать авторов','http://basic/web/index.php?r=admin/autor') ?></li>
            </ul>
<!--            --><?//= $content ?>

        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
